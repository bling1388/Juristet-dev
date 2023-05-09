<?php

namespace App\Http\Controllers;

use App\Models\DosjaPenale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosjaPenaleController extends Controller
{
    public function index()
    {

        $dosja_penales = DosjaPenale::all();
        return response()->json(['data' => $dosja_penales]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $user_id = Auth::user()->id;

        $dosja_penale = new DosjaPenale;

        $dosja_penale->data = $request->data;
        $dosja_penale->baza_ligjore = $request->baza_ligjore['_value'];
        $dosja_penale->veprime_ne_polici = $request->veprime_ne_polici;
        $dosja_penale->komisariati = $request->komisariati;
        $dosja_penale->qyteti = $request->qyteti;
        $dosja_penale->prokuror = $request->prokuror;

        if ($request->hasFile('doc')) {
            $file = $request->file('doc');
            $filerandom = random_int(100000000, 100000000000) . '.' . $file->extension();
            $file->move(public_path('files'), $filerandom);
            $dosja_penale->doc = $filerandom;
        }

        $dosja_penale->koment = $request->koment;
        $dosja_penale->user_id = $user_id;
        $dosja_penale->klient_id = $request->klient_id['_value'];

        $dosja_penale->save();

        return response()->json(['data' => $dosja_penale], 200);
    }

    public function show($id)
    {
        $dosja_penale = DosjaPenale::find($id);
        if (!$dosja_penale) {
            return response()->json(['message' => 'Dosja penale not found'], 404);
        }
        return response()->json(['data' => $dosja_penale]);
    }

    public function update(Request $request, $id)
    {
        $dosja_penale = DosjaPenale::find($id);
        if (!$dosja_penale) {
            return response()->json(['message' => 'Dosja penale not found'], 404);
        }
        $dosja_penale->update($request->all());
        return response()->json(['data' => $dosja_penale]);
    }

    public function destroy($id)
    {
        $dosja_penale = DosjaPenale::find($id);
        if (!$dosja_penale) {
            return response()->json(['message' => 'Dosja penale not found'], 404);
        }
        $dosja_penale->delete();
        return response()->json(['message' => 'Dosja penale deleted']);
    }
}
