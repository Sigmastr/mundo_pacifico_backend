<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class regionSeeder extends Seeder
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
        $regions = [
            ['Arica y Parinacota', 'XV'],
            ['Tarapacá', 'I'],
            ['Antofagasta', 'II'],
            ['Atacama', 'III'],
            ['Coquimbo', 'IV'],
            ['Valparaiso', 'V'],
        ];
        foreach ($regions as $region) {
            region::create()
        }

        DB::table('regiones')->insert($regions);
    }
}
