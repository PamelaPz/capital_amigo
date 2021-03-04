<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'imagen' => 'full5.jpg',
            'name' => 'Gerardo López',
            'puesto' => 'Socio fundador del Fondo',
        ]);
        DB::table('teams')->insert([
            'imagen' => 'full6.jpg',
            'name' => 'Carlos Valladares',
            'puesto' => 'Socio fundador del Fondo',
        ]);
    }
}
