<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'h2'=> 'Contáctanos',
            'h5' => 'Será un placer atenderte',
            'address' => 'Presidente Masaryk 61-901B Col. Polanco. Alcaldía Miguel Hidalgo, C.P 11560. Ciudad de México.',
            'phone' => '+52 (55) 5293 9213',
            'email' => 'contacto@capitalamigo.mx',
        ]);
    }
}
