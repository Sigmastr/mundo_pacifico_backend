<?php

namespace App\Http\Controllers;

use App\Models\calle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class calleController extends Controller
{
    //
    public function mostrarCalle($id)
    {
        try {
            $calles = DB::table('calles')
                ->select('id', 'nombre')
                ->where('id_ciudad', '=', $id)->get();
            return $calles;
        } catch (\Throwable $e) {
            Log::error(['error' => $e->getMessage(), 'linea' => $e->getLine(), 'file' => $e->getFile(), 'metodo' => 'mostrar calles']);
        }
    }
    public function mostrarTodasCalles(Request $request)
    {
        try {
            $id_region = $request->input('id_region');
            $id_provincia = $request->input('id_provincia');
            $id_ciudad = $request->input('id_ciudad');
            $resultado = DB::table('calles')
                ->when('id_region', function ($query) use ($id_region) {
                    return $query->join('regiones', 'regiones.id', '=', 'calles.id')
                        ->where('regiones.id', '=', $id_region)
                        ->join('provincias', 'provincias.id', '=', 'regiones.id')
                        ->join('ciudades', 'ciudades.id_provincia', '=', 'provincias.id')

                        ->select('calles.nombre')
                        ->groupBy('calles.nombre')
                        ->havingRaw('COUNT(calles.id) >= 1');
                })
                ->get();
            return $resultado;
        } catch (\Throwable $e) {
            Log::error(['error' => $e->getMessage(), 'linea' => $e->getLine(), 'file' => $e->getFile(), 'metodo' => 'mostrar todas las calles']);
        }
    }
}
