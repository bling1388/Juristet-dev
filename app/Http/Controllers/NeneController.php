<?php

namespace App\Http\Controllers;

use App\Models\Nene;

class NeneController extends Controller
{
    public function nenes()
    {
        $nenes = Nene::all();
        return response()->json($nenes);
    }
}
