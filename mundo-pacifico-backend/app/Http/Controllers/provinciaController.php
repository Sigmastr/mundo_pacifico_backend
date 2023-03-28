<?php

namespace App\Http\Controllers;

use App\Models\provincia;
use Illuminate\Http\Request;

class provinciaController extends Controller
{
    //
    public function mostrarProvincia($id)
    {
        $region = provincia::find($id);
        if (!$region) {
            return response()->json(['mensaje' => 'No se ha encontrado la Provincia'], 404);
        }
        return response()->json($region, 200);
    }
}
