<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class comentarioFactory extends Factory
{

    public function definition()
    {
        return [
            "contenido" => $this->faker->paragraph(2),
            "megusta" => rand(0, 100),
        ];
    }

    public function afterCreating($comentario)
    {
        $comentario->c_post()->create([
            'post_id' => rand(1, 10)
        ]);
    }

}
