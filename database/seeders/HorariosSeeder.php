<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('horarios')->insert([
            ['ID_Estudiante' => 1, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 2, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 2, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 3, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 3, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 4, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 4, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 5, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 5, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 6, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 6, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 7, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 7, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 8, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 8, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 9, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 9, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 10, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 10, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 11, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 11, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 12, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 12, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 13, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 13, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 14, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 14, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 15, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Martes', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 15, 'ID_Docente' => 4, 'ID_Asignatura' => 9, 'Dia' => 'Jueves', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 2, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 2, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 16, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 16, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 17, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 17, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 18, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 18, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 19, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 19, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 20, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 20, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 21, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 21, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 22, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 22, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 23, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 23, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 24, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 24, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 25, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 25, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 26, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 26, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 27, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 27, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 28, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 28, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 29, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 29, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 30, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Lunes', 'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 30, 'ID_Docente' => 4, 'ID_Asignatura' => 3, 'Dia' => 'Miércoles', 'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 5, 'ID_Asignatura' => 1, 'Dia' => 'Lunes',     'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 5, 'ID_Asignatura' => 1, 'Dia' => 'Miércoles', 'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 6, 'ID_Asignatura' => 2, 'Dia' => 'Martes',    'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 6, 'ID_Asignatura' => 2, 'Dia' => 'Jueves',    'Hora_Inicio' => '16:00:00', 'Hora_Fin' => '18:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 7, 'ID_Asignatura' => 5, 'Dia' => 'Lunes',     'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 7, 'ID_Asignatura' => 5, 'Dia' => 'Viernes',   'Hora_Inicio' => '08:00:00', 'Hora_Fin' => '10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 8, 'ID_Asignatura' => 7, 'Dia' => 'Martes',    'Hora_Inicio' => '10:00:00', 'Hora_Fin' => '12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['ID_Estudiante' => 1, 'ID_Docente' => 8, 'ID_Asignatura' => 7, 'Dia' => 'Viernes',   'Hora_Inicio' => '14:00:00', 'Hora_Fin' => '16:00:00', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
