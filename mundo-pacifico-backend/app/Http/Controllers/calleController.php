<?php

namespace App\Http\Controllers;

use App\Models\calle;
use Illuminate\Http\Request;

class calleController extends Controller
{
    //
    public function mostrarCalle($id)
    {
        $region = calle::find($id);
        if (!$region) {
            return response()->json(['mensaje' => 'No se ha encontrado la Calle'], 404);
        }
        return response()->json($region, 200);
    }
}
