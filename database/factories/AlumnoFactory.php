<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
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
        $nacimiento = $faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d');
        $edad = Carbon::parse($nacimiento)->age;

        return [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'cedula' => $cedula,
            'nacimiento' => $nacimiento,
            'edad' => $edad,
        ];
    }
}
