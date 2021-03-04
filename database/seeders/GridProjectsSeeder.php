<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GridProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grid_projects')->insert([
            'imagen' => 'capital_amigo/img/full16.jpg',
            'name' => 'Boturini 655',
        ]);
        DB::table('grid_projects')->insert([
            'imagen' => 'capital_amigo/img/full16.jpg',
            'name' => 'Proximamente',
        ]);
        DB::table('grid_projects')->insert([
            'imagen' => 'capital_amigo/img/full16.jpg',
            'name' => 'Proximamente',
        ]);
    }
}
