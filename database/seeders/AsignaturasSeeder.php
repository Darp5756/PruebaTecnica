<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $asignaturas = [
            'Matemáticas',
            'Lengua',
            'Inglés',
            'Química',
            'Biología',
            'Educación Físca',
            'Arte',
            'Ciencias Sociales',
        ];

        foreach ($asignaturas as $asignatura) {
            Asignatura::create([
                'nombre' => $asignatura,
            ]);
        }

    }
}
