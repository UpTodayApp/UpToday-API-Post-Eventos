<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class eventoFactory extends Factory
{

    public function definition()
    {
        return [
            "nombre" => $this->faker->userName(),
            "participan" =>  rand(1, 100),
            "fecha" => $this->faker->date(),
            "detalles" => $this->faker->paragraph(1),
            "ubicacion" => $this->faker->paragraph(1),
            "etiquetas" => $this->faker->words(1, true),
        ];
    }

    public function afterCreating($comentario)
    {
        $comentario->e_crea()->create([
            'usuario_id' => rand(1, 10) 
        ]);
    }

}
