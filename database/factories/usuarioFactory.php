<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class usuarioFactory extends Factory
{

    public function definition()
    {
        return [
            "nombre" => $this->faker->userName(),
            "contrasenia" => $this->faker->password(8),
            "correo" => $this->faker->email(),
            "nacimiento" => $this->faker->date('Y-m-d', 'now - 18 years'), 
            "genero" => $this->faker->randomElement(['hombre', 'mujer', 'otro']),
        ];
    }

}
