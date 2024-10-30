<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class megustapostTest extends TestCase
{

    /*
    public function test_CrearUnMegustaPost()
    {
        $estructuraEsperable = [

            'usuario_id',
            'post_id',
            'created_at',
            'updated_at'


        ];

        $datosDeMegustapost = [
            "usuario_id" => 1,
            "post_id" => 1
        ];

        $response = $this->post('/api/megustapost', $datosDeMegustapost);
        $response->assertStatus(201);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDeMegustapost);

        $this->assertDatabaseHas('megusta', [
            "usuario_id" => 1,
            "post_id" => 1
        ]);
    }

    public function test_ObtenerListadoDeMegustaPost()
    {
        $estructuraEsperable = [
            '*' => [
                'usuario_id',
                'post_id',
                'created_at',
                'updated_at',
                'deleted_at'
            ]
        ];

        $response = $this->get('/api/megustapost');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnMegustaPost()
    {
        $estructuraEsperable = [

            'usuario_id',
            'post_id',
            'created_at',
            'updated_at',
            'deleted_at'

        ];

        $response = $this->get('/api/megustapost/1');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnMegustaPostQueNoExiste()
    {
        $response = $this->get('/api/megustapost/99999');
        $response->assertStatus(404);
    }

    public function test_EliminarMegustaPostQueNoExiste()
    {
        $response = $this->delete('/api/megustapost/99999');
        $response->assertStatus(404);
    }


    public function test_EliminarMegustapost()
    {
        $response = $this->delete('/api/megustapost/3');
        $response->assertStatus(200);
        $response->assertJsonStructure(['mensaje']);
        $response->assertJsonFragment(['mensaje' => 'Me gusta post eliminado']);

        $this->assertDatabaseMissing('megusta', [
            'id' => '3',
            'deleted_at' => null
        ]);
    }

*/


}
