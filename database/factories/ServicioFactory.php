<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Servicio;
class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_contador' => $this->faker->numerify('########') ,
            'fecha_revision' => $this->faker->date,
            'fecha_corte' => $this->faker->date,
            'promedio_consumo' => $this->faker->randomFloat,
        ];
    }
}
