<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class provinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = now();
        $provincia = [
            [
                'nombre' => 'Concepción',
                'id_region' => 1,

            ],
            [
                'nombre' => 'Itata',
                'id_region' =>
                1,

            ],
            [
                'nombre' => 'Valparaiso',
                'id_region' =>
                3,

            ],


        ];
        DB::table('provincias')->insert($provincia);
    }
}
