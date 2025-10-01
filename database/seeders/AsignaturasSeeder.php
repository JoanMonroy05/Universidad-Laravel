<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asignaturas')->insert([
            ['NombreAsignatura' => 'Programación I', 'Creditos' => 3],
            ['NombreAsignatura' => 'Programación II', 'Creditos' => 3],
            ['NombreAsignatura' => 'Bases de Datos', 'Creditos' => 4],
            ['NombreAsignatura' => 'Redes de Computadores', 'Creditos' => 3],
            ['NombreAsignatura' => 'Sistemas Operativos', 'Creditos' => 4],
            ['NombreAsignatura' => 'Ingeniería de Software', 'Creditos' => 3],
            ['NombreAsignatura' => 'Inteligencia Artificial', 'Creditos' => 4],
            ['NombreAsignatura' => 'Seguridad Informática', 'Creditos' => 3],
            ['NombreAsignatura' => 'Tendencias de Ingenieria de Sistemas', 'Creditos' => 4],
            ['NombreAsignatura' => 'Compiladores', 'Creditos' => 3],
        ]);
    }
}
