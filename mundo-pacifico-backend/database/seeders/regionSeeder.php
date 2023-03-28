<?php

namespace Database\Seeders;

use App\Models\region;
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

        $regions = [
            [
                'nombre' => 'Bío-Bío',

            ],
            [
                'nombre' => 'Ñuble',

            ],
            [
                'nombre' => 'Valparaiso',

            ],

        ];

        DB::table('regiones')->insert($regions);
    }
}
