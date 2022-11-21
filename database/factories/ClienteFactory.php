<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'tipo'=> $this->faker->randomElement($array = array ('Mayorista','Minorista')),
            'direccion' =>$this->faker->address,
            'telefono' =>$this->faker->numerify('9#######'),
            'imagen' => 'Perfil (' .$this->faker->numberBetween(1,4 ).$this->faker->numerify('#').').jpg'
        ];
    }
}
