<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alumno;
use App\Models\Calificacion;
use App\Models\Profesor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AlumnosSeeder::class,
            AsignaturasSeeder::class,
            ProfesoresSeeder::class,
        ]);

        Alumno::factory(10)->create();
        Profesor::factory(10)->create();
        Calificacion::factory(10)->create();
    }
}
