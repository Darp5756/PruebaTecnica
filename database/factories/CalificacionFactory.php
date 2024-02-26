<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Asignatura;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calificacion>
 */
class CalificacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('es_ES');
        $id_alumno = Alumno::pluck('id_alumno')->random();
        $id_asignatura = Asignatura::pluck('id_asignatura')->random();
        $calificacion = $faker->randomNumber(2);

        return [
            'id_alumno' => $id_alumno,
            'id_asignatura' => $id_asignatura,
            'calificacion' => $calificacion,
        ];
    }
}
