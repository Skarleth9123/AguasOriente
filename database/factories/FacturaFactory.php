<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Factura;

class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero_factura' =>$this->faker->numerify('###############'),
            'fecha_emision' =>$this->faker->date,
            'consumo_actual' => $this->faker->randomFloat,
            'consumo_anterior' => $this->faker->randomFloat,
            'total_pagar' => $this->faker->randomFloat,
            'cliente_id' => $this->faker->numberBetween(1,4 ).$this->faker->numerify('#'),
            'servicio_id' => $this->faker->numberBetween(1,4 ).$this->faker->numerify('#')
        ];
    }
}
