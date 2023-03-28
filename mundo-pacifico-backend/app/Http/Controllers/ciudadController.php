<?php

namespace App\Http\Controllers;

use App\Models\ciudad;
use Illuminate\Http\Request;

class ciudadController extends Controller
{
    //
    public function mostrarCiudad($id)
    {
        $region = ciudad::find($id);
        if (!$region) {
            return response()->json(['mensaje' => 'No se ha encontrado la Ciudad'], 404);
        }
        return response()->json($region, 200);
    }
}
