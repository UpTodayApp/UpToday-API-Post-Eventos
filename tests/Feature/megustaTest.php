<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class megustaTest extends TestCase
{
  
    public function test_CrearUnMegusta()
    {
        $estructuraEsperable = [

            "usuario_id",
            "post_id",
            "updated_at",
            "created_at",
            "id"

        ];

        $datosDeMegusta = [
            
            "usuario_id"=> 1,
            "post_id" =>1
        ];

        $response = $this->post('/api/megusta', $datosDeMegusta);
        $response->assertStatus(201);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDeMegusta);

        $this->assertDatabaseHas('megusta', [       
            "usuario_id"=> 1,
            "post_id" =>1
        ]);
    }

    public function test_ObtenerListadoDeMegusta()
    {
        $estructuraEsperable = [
            '*' => [
                "usuario_id",
                "post_id",
                "updated_at",
                "created_at",
                "id"
            ]
        ];

        $response = $this->get('/api/megusta');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnMegusta()
    {
        $estructuraEsperable = [

            "usuario_id",
            "post_id",
            "updated_at",
            "created_at",
            "id"

        ];

        $response = $this->get('/api/megusta/1');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_Modificarmegusta()
    {
        $estructuraEsperable = [

            "usuario_id",
            "post_id",
            "updated_at",
            "created_at",
            "id"

        ];

        $datosDeMegusta = [
                        
            "usuario_id"=> 2,
            "post_id" =>1
        ];

        $response = $this->put('/api/megusta/2', $datosDeMegusta);
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDeMegusta);
        $this->assertDatabaseHas('megusta', [
            "usuario_id"=> 2,
            "post_id" =>1
        ]);
    }

    public function test_EliminarMegusta()
    {
        $response = $this->delete('/api/megusta/3');
        $response->assertStatus(200);
        $response->assertJsonStructure(['mensaje']);
        $response->assertJsonFragment(['mensaje' => 'megusta eliminado']);

        $this->assertDatabaseMissing('megusta', [
            'id' => '3',
            'deleted_at' => null
        ]);
    }
}
