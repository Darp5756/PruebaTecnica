<?php

namespace Database\Factories;

use App\Models\Asignatura;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('es_ES');
        $nombre = $faker->firstName;
        $apellido = $faker->lastName;
        $cedula = $faker->randomNumber(8);
        $id_asignatura = Asignatura::pluck('id_asignatura')->random();

        return [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'cedula' => $cedula,
            'id_asignatura' => $id_asignatura,
        ];
    }
}
