<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ciudadController extends Controller
{
    //
    public function mostrarCiudad($id)
    {
        try {
            $ciudad = DB::table('ciudades')
                ->select('id', 'nombre')
                ->where('id_provincia', '=', $id)->get();
            return $ciudad;
        } catch (\Throwable $e) {
            Log::error(['error' => $e->getMessage(), 'linea' => $e->getLine(), 'file' => $e->getFile(), 'metodo' => 'mostrar Ciudad']);
        }
    }
}
