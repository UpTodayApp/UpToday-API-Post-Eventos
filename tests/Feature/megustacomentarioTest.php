<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class megustacomentarioTest extends TestCase
{

   
    public function test_CrearUnMegustaComentario()
    {
        $estructuraEsperable = [

            'usuario_id',
            'comentario_id',
            'created_at',
            'updated_at'


        ];

        $datosDeMegustacomentario = [
            "usuario_id" => 1,
            "comentario_id" => 1
        ];

        $response = $this->post('/api/megustacomentario', $datosDeMegustacomentario);
        $response->assertStatus(201);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDeMegustacomentario);

        $this->assertDatabaseHas('megusta', [
            "usuario_id" => 1,
            "comentario_id" => 1
        ]);
    }


    public function test_ObtenerListadoDeMegustaComentario()
    {
        $estructuraEsperable = [
            '*' => [
                'usuario_id',
                'comentario_id',
                'created_at',
                'updated_at',
                'deleted_at'
            ]
        ];

        $response = $this->get('/api/megustacomentario');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnMegustaComentario()
    {
        $estructuraEsperable = [

            'usuario_id',
            'comentario_id',
            'created_at',
            'updated_at',
            'deleted_at'

        ];

        $response = $this->get('/api/megustacomentario/2');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnMegustaComentarioQueNoExiste()
    {
        $response = $this->get('/api/megustacomentario/99999');
        $response->assertStatus(404);
    }


    public function test_EliminarMegustaComentarioQueNoExiste()
    {
        $response = $this->delete('/api/megustacomentario/99999');
        $response->assertStatus(404);
    }

    public function test_EliminarMegustaComentario()
    {
        $response = $this->delete('/api/megustacomentario/2');
        $response->assertStatus(200);
        $response->assertJsonStructure(['mensaje']);
        $response->assertJsonFragment(['mensaje' => 'Me gusta comentario eliminado']);

        $this->assertDatabaseMissing('megusta', [
            'id' => '2',
            'deleted_at' => null
        ]);
    }


}
