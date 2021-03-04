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
            'imagen' => 'full16.jpg',
            'name' => 'Boturini 655',
            'status' => '',
        ]);
        DB::table('grid_projects')->insert([
            'imagen' => 'full17.jpg',
            'name' => 'Proximamente',
            'status' => 'proximamente',
        ]);
        DB::table('grid_projects')->insert([
            'imagen' => 'full18.jpg',
            'name' => 'Proximamente',
            'status' => 'proximamente',
        ]);
    }
}
