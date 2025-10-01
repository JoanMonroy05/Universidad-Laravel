<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('docentes')->insert([
            [
                ['Nombre' => 'Carlos', 'Apellido' => 'Ramírez', 'Especialidad' => 'Inteligencia Artificial', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'María', 'Apellido' => 'Gómez', 'Especialidad' => 'Bases de Datos', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Juan', 'Apellido' => 'Pérez', 'Especialidad' => 'Redes de Computadoras', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Eduar', 'Apellido' => 'Bayona', 'Especialidad' => 'Ingeniería de Software', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Andrés', 'Apellido' => 'Martínez', 'Especialidad' => 'Seguridad Informática', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Lucía', 'Apellido' => 'Hernández', 'Especialidad' => 'Minería de Datos', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Felipe', 'Apellido' => 'Castaño', 'Especialidad' => 'Arquitectura de Computadores', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Diana', 'Apellido' => 'Torres', 'Especialidad' => 'Programación', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Santiago', 'Apellido' => 'Mendoza', 'Especialidad' => 'Sistemas Operativos', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Valentina', 'Apellido' => 'Rodríguez', 'Especialidad' => 'Compiladores', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Mateo', 'Apellido' => 'López', 'Especialidad' => 'Algoritmos', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Camila', 'Apellido' => 'Vargas', 'Especialidad' => 'Inteligencia Artificial', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Sebastián', 'Apellido' => 'Ortega', 'Especialidad' => 'Robótica', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Natalia', 'Apellido' => 'Salazar', 'Especialidad' => 'Gestión de Proyectos', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Julián', 'Apellido' => 'Morales', 'Especialidad' => 'Cloud Computing', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Paula', 'Apellido' => 'Guerrero', 'Especialidad' => 'Programación Móvil', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Tomás', 'Apellido' => 'Jiménez', 'Especialidad' => 'Ingeniería de Requisitos', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Isabel', 'Apellido' => 'Rincón', 'Especialidad' => 'Visión por Computador', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Daniel', 'Apellido' => 'Cortés', 'Especialidad' => 'Big Data', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Sara', 'Apellido' => 'Bermúdez', 'Especialidad' => 'Bioinformática', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Esteban', 'Apellido' => 'Patiño', 'Especialidad' => 'Ciberseguridad', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Manuela', 'Apellido' => 'Silva', 'Especialidad' => 'Desarrollo de Videojuegos', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'David', 'Apellido' => 'Suárez', 'Especialidad' => 'Ingeniería del Conocimiento', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Juliana', 'Apellido' => 'Aguilar', 'Especialidad' => 'Computación Gráfica', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Alejandra', 'Apellido' => 'Córdoba', 'Especialidad' => 'Aprendizaje Automático', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Gabriel', 'Apellido' => 'Navarro', 'Especialidad' => 'Sistemas Distribuidos', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Samuel', 'Apellido' => 'Montoya', 'Especialidad' => 'Ingeniería Web', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Carolina', 'Apellido' => 'Peña', 'Especialidad' => 'Criptografía', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Jorge', 'Apellido' => 'Reyes', 'Especialidad' => 'Realidad Aumentada', 'created_at' => now(), 'updated_at' => now()],
                ['Nombre' => 'Daniela', 'Apellido' => 'Castro', 'Especialidad' => 'IoT - Internet de las Cosas', 'created_at' => now(), 'updated_at' => now()],
            ]
        ]);
    }
}
