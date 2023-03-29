<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ciudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $ciudades = [
            [
                'nombre' => 'Concepción', 'id_provincia' => 1,

            ],
            [
                'nombre' => 'Talcahuano', 'id_provincia' => 1,

            ],
            [
                'nombre' => 'Chiguayante', 'id_provincia' => 1,

            ],
            [
                'nombre' => 'Quirihue', 'id_provincia' => 2,

            ],
            [
                'nombre' => 'Cobquecura', 'id_provincia' => 2,

            ],
            [
                'nombre' => 'Valparaíso', 'id_provincia' => 2,

            ],
            ['nombre' => 'Isla de Pascua', 'id_provincia' =>  3],
            ['nombre' => 'Calle Larga', 'id_provincia' => 3],
        ];
        DB::table('ciudades')->insert($ciudades);
    }
}
