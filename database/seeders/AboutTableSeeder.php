<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'h5' => 'Acerca de Capital Amigo',
            'h2' => 'Somos tus mejores amigos cuando se trata de inversión',
            'p1' => 'Somos una firma de administración de capital enfocada en activos inmobiliarios en México.',
            'p2' => 'Generamos y a la vez somos responsables de toda la cadena de valor desde la originación, estructuración, desarrollo, monitorio y cierre de los proyectos e inversiones inmobiliarias.',
        ]);
    }
}
