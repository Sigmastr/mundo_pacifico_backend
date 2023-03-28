<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class calleSeeder extends Seeder
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
        $calles = [
            ['nombre' => 'Siempre Viva', 'id_ciudad' => 1],
            ['nombre' => 'Nicolas Perez', 'id_ciudad' => 2],
            ['nombre' => 'Gabriela Mistral', 'id_ciudad' => 3],
            ['nombre' => 'Nelson', 'id_ciudad' => 4],
            ['nombre' => 'Calle calle', 'id_ciudad' => 5]
        ];

        DB::table('calles')->insert($calles);
    }
}
