<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class postFactory extends Factory
{

    public function definition()
    {
        return [
            "contenido" => $this->faker->paragraph(2),
            "megusta" => rand(0, 100), 
            "etiquetas" => $this->faker->words(1, true),
        ];
    }

    public function afterCreating($comentario)
    {
        $comentario->publica()->create([
            'usuario_id' => rand(1, 10) 
        ]);
    }
}
