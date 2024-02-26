<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::create([
            'nombre' => 'Amanda',
            'apellido' => 'Ríos',
            'cedula' => '26421658',
            'nacimiento' => '2001-05-13',
            'edad' => '22',
        ]);
    }
}
