<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class postTest extends TestCase
{
    /*

    public function test_CrearUnPost()
    {
        $estructuraEsperable = [
            'id',
            'usuario_id',
            'contenido',
            'created_at',
            'updated_at',


        ];

        $datosDePost = [
            "usuario_id" => 1,
            "contenido" => "super post"
        ];

        $response = $this->post('/api/post', $datosDePost);
        $response->assertStatus(201);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDePost);

        $this->assertDatabaseHas('post', [
            "usuario_id" => 1,
            "contenido" => "super post"

 
        ]);
    }

    public function test_ObtenerListadoDePost()
    {
        $estructuraEsperable = [
            '*' => [
                'id',
                'usuario_id',
                "ubicacion",
                'contenido',
                'created_at',
                'updated_at',
                'deleted_at'
            ]
        ];

        $response = $this->get('/api/post');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }
    public function test_ObtenerUnPost()
    {
        $estructuraEsperable = [

            'id',
            'usuario_id',
            "ubicacion",
            'contenido',
            'created_at',
            'updated_at',
            'deleted_at'

        ];

        $response = $this->get('/api/post/1');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnaPostQueNoExiste()
    {
        $response = $this->get('/api/post/99999');
        $response->assertStatus(404);
    }


    public function test_EliminarPostQueNoExiste()
    {
        $response = $this->delete('/api/post/99999');
        $response->assertStatus(404);
    }


    public function test_ModificarPost()
    {
        $estructuraEsperable = [

            'id',
            'usuario_id',
            "ubicacion",
            'contenido',
            'created_at',
            'updated_at',
            'deleted_at'

        ];

        $datosDePost = [
            "usuario_id" => 2,
            "contenido" => "Soy un arbol"
        ];

        $response = $this->put('/api/post/2', $datosDePost);
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDePost);
        $this->assertDatabaseHas('post', [
            "usuario_id" => 2,
            "contenido" => "Soy un arbol"
        ]);
    }

    public function test_ModificarPostQueNoExiste()
    {
        $response = $this->put('/api/post/99999');
        $response->assertStatus(404);
    }

    
    public function test_EliminarPost()
    {
        $response = $this->delete('/api/post/3');
        $response->assertStatus(200);
        $response->assertJsonStructure(['mensaje']);
        $response->assertJsonFragment(['mensaje' => 'post eliminado']);

        $this->assertDatabaseMissing('post', [
            'id' => '3',
            'deleted_at' => null
        ]);
    }
*/
    }
