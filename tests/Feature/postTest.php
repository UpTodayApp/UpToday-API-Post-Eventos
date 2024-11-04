<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class postTest extends TestCase
{
    
    public function test_CrearUnPost()
    {
        
        $estructuraEsperable = [
            "id",
            "contenido",
            "created_at",
            "updated_at",
        ];

        $datosDePost = [
            "contenido" => "Nuevo post de prueba",
        ];

        $response = $this->post('/api/post', $datosDePost);
        $response->assertStatus(201);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDePost);

        $this->assertDatabaseHas('post', $datosDePost);
    }

    public function test_ObtenerListadoDePost()
    {
        $estructuraEsperable = [
            '*' => [
                'id',
                'contenido',
                'created_at',
                'updated_at',
                'deleted_at',
            ],
        ];

        $response = $this->get('/api/post');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnPost()
    {
        $post = Post::factory()->create();
        $estructuraEsperable = [
            'id',
            'contenido',
            'created_at',
            'updated_at',
            'deleted_at',
        ];

        $response = $this->get('/api/post/' . $post->id);
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ModificarPost()
    {
        $post = Post::factory()->create();
        $estructuraEsperable = [
            'id',
            'contenido',
            'created_at',
            'updated_at',
            'deleted_at',
        ];

        $datosDePost = [
            "contenido" => "Post modificado",
        ];

        $response = $this->put('/api/post/' . $post->id, $datosDePost);
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDePost);

        $this->assertDatabaseHas('post', $datosDePost);
    }

    public function test_EliminarPost()
    {
        $post = Post::factory()->create();
        $response = $this->delete('/api/post/' . $post->id);
        $response->assertStatus(200);
        $response->assertJsonStructure(['mensaje']);
        $response->assertJsonFragment(['mensaje' => 'post eliminado']);

        $this->assertDatabaseMissing('post', [
            'id' => $post->id,
            'deleted_at' => null,
        ]);
    }
    
}

