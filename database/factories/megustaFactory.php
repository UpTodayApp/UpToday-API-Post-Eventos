<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class megustaFactory extends Factory
{

    public function definition()
    {
        return [
            "usuario_id" => rand(1, 10),
            "post_id" => $this->faker->randomElement([null, rand(1, 10)]),
            "comentario_id" => $this->faker->randomElement([null, rand(1, 10)]),
        ];
    }
}
