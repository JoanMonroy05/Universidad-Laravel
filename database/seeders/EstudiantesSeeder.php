<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->insert([
            [ 'Nombre' => 'Joan', 'Apellido' => 'Monroy', 'Semestre' => 4, 'created_at' => now(),'updated_at' => now() ],
            [ 'Nombre' => 'Carlos', 'Apellido' => 'Ramírez', 'Semestre' => 1, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'María', 'Apellido' => 'Gómez', 'Semestre' => 2, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'María', 'Apellido' => 'Gómez', 'Semestre' => 2, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Keiner', 'Apellido' => 'Villalba', 'Semestre' => 4, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Laura', 'Apellido' => 'Fernández', 'Semestre' => 4, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Andrés', 'Apellido' => 'Martínez', 'Semestre' => 5, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Lucía', 'Apellido' => 'Hernández', 'Semestre' => 6, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Felipe', 'Apellido' => 'Castaño', 'Semestre' => 7, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Diana', 'Apellido' => 'Torres', 'Semestre' => 8, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Santiago', 'Apellido' => 'Mendoza', 'Semestre' => 1, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Valentina', 'Apellido' => 'Rodríguez', 'Semestre' => 2, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Mateo', 'Apellido' => 'López', 'Semestre' => 3, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Camila', 'Apellido' => 'Vargas', 'Semestre' => 4, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Sebastián', 'Apellido' => 'Ortega', 'Semestre' => 5, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Natalia', 'Apellido' => 'Salazar', 'Semestre' => 6, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Julián', 'Apellido' => 'Morales', 'Semestre' => 7, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Paula', 'Apellido' => 'Guerrero', 'Semestre' => 8, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Tomás', 'Apellido' => 'Jiménez', 'Semestre' => 1, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Isabel', 'Apellido' => 'Rincón', 'Semestre' => 2, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Daniel', 'Apellido' => 'Cortés', 'Semestre' => 3, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Sara', 'Apellido' => 'Bermúdez', 'Semestre' => 4, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Esteban', 'Apellido' => 'Patiño', 'Semestre' => 5, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Manuela', 'Apellido' => 'Silva', 'Semestre' => 6, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'David', 'Apellido' => 'Suárez', 'Semestre' => 7, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Juliana', 'Apellido' => 'Aguilar', 'Semestre' => 8, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Alejandra', 'Apellido' => 'Córdoba', 'Semestre' => 1, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Gabriel', 'Apellido' => 'Navarro', 'Semestre' => 2, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Samuel', 'Apellido' => 'Montoya', 'Semestre' => 3, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Carolina', 'Apellido' => 'Peña', 'Semestre' => 4, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Jorge', 'Apellido' => 'Reyes', 'Semestre' => 5, 'created_at' => now(), 'updated_at' => now() ],
            [ 'Nombre' => 'Daniela', 'Apellido' => 'Castro', 'Semestre' => 6, 'created_at' => now(), 'updated_at' => now() ],
        ]);
    }
}
