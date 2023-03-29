<?php

namespace App\Http\Controllers;

use App\Models\provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class provinciaController extends Controller
{
    //
    public function mostrarProvincia($id)
    {
        try {
            // se puede mostrar solo con esto y lo anterior registrado, para filtrar.
            $provincia = DB::table('provincias')
                ->select('id', 'nombre')
                ->where('id_region', '=', $id)->get();
            return $provincia;
        } catch (\Throwable $e) {
            Log::error(['error' => $e->getMessage(), 'linea' => $e->getLine(), 'file' => $e->getFile(), 'metodo' => 'mostrar provincia']);
        }
    }
    public function mostrarProvinciasCalles($id)
    {
        try {
            // se puede mostrar solo con esto y lo anterior registrado, para filtrar.
            $ciudad = DB::table('ciudades')
                ->select('id', 'nombre')
                ->where('id_provincia', '=', $id)->get();
            return $ciudad;
        } catch (\Throwable $e) {
            Log::error(['error' => $e->getMessage(), 'linea' => $e->getLine(), 'file' => $e->getFile(), 'metodo' => 'mostrar provincia']);
        }
    }
}
