<?php

namespace App\Http\Controllers;

use App\Models\Klient;
use Illuminate\Http\Request;

class KlientController extends Controller
{
    public function index()
    {
        $klientet = Klient::all();
        return response()->json(['klientet' => $klientet]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'emer' => 'required',
            'atesia' => 'required',
            'mbiemer' => 'required',
            'id_nr' => 'required',
            'i_denuar' => 'required',
            'statusi_civil' => 'required',
            'personi_kontaktit' => 'required',
            'numri_kontaktit' => 'required',
            'arsimi' => 'required',
            'user_id' => 'required',

        ]);

        $klient = Klient::create($validated);
        return response()->json(['klient' => $klient]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'emer' => 'required',
            'atesia' => 'required',
            'mbiemer' => 'required',
            'id_nr' => 'required',
            'i_denuar' => 'required',
            'statusi_civil' => 'required',
            'personi_kontaktit' => 'required',
            'numri_kontaktit' => 'required',
            'arsimi' => 'required',
            'user_id' => 'required',
        ]);

        $klient = Klient::findOrFail($id);
        $klient->update($validated);

        return response()->json(['klient' => $klient]);
    }

    public function destroy($id)
    {
        $klient = Klient::findOrFail($id);
        $klient->delete();

        return response()->json(['message' => 'Klient deleted successfully']);
    }
}
