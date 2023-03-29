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
            return  DB::table('calles')
                ->when($id_region != null || $id_provincia != null || $id_ciudad != null, function ($query) use ($id_region, $id_provincia, $id_ciudad) {
                    return $query->join('ciudades', 'calles.id_ciudad', '=', 'ciudades.id')
                        ->join('provincias', 'ciudades.id_provincia', '=', 'provincias.id')
                        ->join('regiones', 'provincias.id_region', '=', 'regiones.id')
                        ->when($id_ciudad, function ($query) use ($id_ciudad) {
                            return $query->where('calles.id_ciudad', '=', $id_ciudad);
                        })
                        ->when($id_provincia, function ($query) use ($id_provincia) {
                            return $query->where('ciudades.id_provincia', '=', $id_provincia);
                        })
                        ->when($id_region, function ($query) use ($id_region) {
                            return $query->where('provincias.id_region', '=', $id_region);
                        })
                        ->select('calles.nombre', 'calles.id')
                        ->orderBy('calles.id')
                        ->groupBy('calles.nombre', 'calles.id')
                        ->havingRaw('COUNT(calles.id) >= 1');
                })
                ->get();
        } catch (\Throwable $e) {
            Log::error(['error' => $e->getMessage(), 'linea' => $e->getLine(), 'file' => $e->getFile(), 'metodo' => 'mostrar todas las calles']);
        }
    }
}
