<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class comentarioTest extends TestCase
{
  
/*
    public function test_CrearUnComentario()
    {
        $estructuraEsperable = [

            "usuario_id",
            "contenido",
            "updated_at",
            "created_at",
            "id",

        ];

        $datosDeComentario = [
            "usuario_id" => 1,
            "contenido" => "caballo homosexual de las montañas"
        ];

        $response = $this->post('/api/comentario', $datosDeComentario);
        $response->assertStatus(201);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDeComentario);

        $this->assertDatabaseHas('comentario', [
            "usuario_id" => 1,
            "contenido" => "caballo homosexual de las montañas"
        ]);
    }

    public function test_ObtenerListadoDeComentario()
    {
        $estructuraEsperable = [
            '*' => [
                'id',
                'usuario_id',
                'contenido',
                'created_at',
                'updated_at',
                'deleted_at'
            ]
        ];

        $response = $this->get('/api/comentario');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnComentario()
    {
        $estructuraEsperable = [

            'id',
            'usuario_id',
            'contenido',
            'created_at',
            'updated_at',
            'deleted_at'

        ];

        $response = $this->get('/api/comentario/1');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnComentarioQueNoExiste()
    {
        $response = $this->get('/api/comentario/99999');
        $response->assertStatus(404);
    }




    public function test_EliminarComentarioQueNoExiste()
    {
        $response = $this->delete('/api/comentario/99999');
        $response->assertStatus(404);
    }

    public function test_ModificarComentario()
    {
        $estructuraEsperable = [

            'id',
            'usuario_id',
            'contenido',
            'created_at',
            'updated_at',
            'deleted_at'

        ];

        $datosDePost = [
            "usuario_id" => 2,
            "contenido" => "ElGatoSapeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee"
        ];

        $response = $this->put('/api/comentario/2', $datosDePost);
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDePost);
        $this->assertDatabaseHas('comentario', [
            "usuario_id" => 2,
            "contenido" => "ElGatoSapeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee"
        ]);
    }

    public function test_EliminarComentario()
    {
        $response = $this->delete('/api/comentario/3');
        $response->assertStatus(200);
        $response->assertJsonStructure(['mensaje']);
        $response->assertJsonFragment(['mensaje' => 'comentario eliminado']);

        $this->assertDatabaseMissing('Comentario', [
            'id' => '3',
            'deleted_at' => null
        ]);
    }

        public function test_ModificarComentarioQueNoExiste()
    {
        $response = $this->put('/api/comentario/99999');
        $response->assertStatus(404);
    }

    
*/
}
