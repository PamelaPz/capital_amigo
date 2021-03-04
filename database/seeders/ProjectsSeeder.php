<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'h5' => 'Proyectos',
            'h2' => 'Conoce los proyectos en los que hemos trabajo.',
            'p1' => 'En cada proyecto tenemos el riesgo controlado a través de una metodología rigurosa de análisis, además contamos con un operador directo que tiene la capacidad de coordinar y ejecutar la cadena de valor inmobiliaria en su totalidad.'
        ]);
    }
}
