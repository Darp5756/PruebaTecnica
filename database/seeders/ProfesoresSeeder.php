<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profesor::create([
            'nombre' => 'Juan',
            'apellido' => 'Palacios',
            'cedula' => '12421683',
            'id_asignatura' => 1,
        ]);
    }
}
