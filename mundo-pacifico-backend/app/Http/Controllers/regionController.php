<?php

namespace App\Http\Controllers;

use App\Models\region;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class regionController extends Controller
{
    //
    public function agregarRegion(Request $request)
    {
        $region = new region();
        $region->nombre = $request->input('nombre_ciudad');
        $region->sigla = $request->input('sigla');
        $region->save();
        return response()->json($region, 201);
    }

    public function mostrarRegion()
    {
        try {
            return region::all();
        } catch (Exception $e) {
            Log::error(['error' => $e->getMessage(), 'linea' => $e->getLine(), 'file' => $e->getFile(), 'metodo' => 'mostrar región']);
        }
    }
}
