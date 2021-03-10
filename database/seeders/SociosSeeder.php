<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SociosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socios')->insert([
            'imagen' => 'Images/socio1.png',
        ]);
        DB::table('socios')->insert([
            'imagen' => 'Images/socio2.png',
        ]);
    }
}
