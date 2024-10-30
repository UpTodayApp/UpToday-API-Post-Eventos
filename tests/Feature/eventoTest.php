<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class eventoTest extends TestCase
{
   /*
    public function test_CrearUnEvento()
    {
        $estructuraEsperable = [
            "usuario_id",
            "nombre",
            "participan",
            "fecha",
            "detalles",
            "ubicacion",
            "updated_at",
            "created_at",
            "id"


        ];

        $datosDeEvento = [
            "usuario_id" => 1,
            "nombre" => "super evento chachis pistachis",
            "participan" => 1,
            "fecha" => "2001-1-1",
            "detalles" => "el super evento de carlos",
            "ubicacion" => "la casa de carlos"
        ];

        $response = $this->post('/api/evento', $datosDeEvento);
        $response->assertStatus(201);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDeEvento);

        $this->assertDatabaseHas('evento', [
            "usuario_id" => 1,
            "nombre" => "super evento chachis pistachis",
            "participan" => 1,
            "fecha" => "2001-1-1",
            "detalles" => "el super evento de carlos",
            "ubicacion" => "la casa de carlos"
        ]);
    }


    public function test_ObtenerListadoDeEvento()
    {
        $estructuraEsperable = [
            '*' => [
                "usuario_id",
                "nombre",
                "participan",
                "fecha",
                "detalles",
                "ubicacion",
                "updated_at",
                "created_at",
                "deleted_at",
                "id"
            ]
        ];

        $response = $this->get('/api/evento');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }


    public function test_ObtenerUnEvento()
    {
        $estructuraEsperable = [
            "usuario_id",
            "nombre",
            "participan",
            "fecha",
            "detalles",
            "ubicacion",
            "updated_at",
            "created_at",
            "deleted_at",
            "id"
        ];

        $response = $this->get('/api/evento/1');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ModificarEvento()
    {
        $estructuraEsperable = [
            "usuario_id",
            "nombre",
            "participan",
            "fecha",
            "detalles",
            "ubicacion",
            "updated_at",
            "created_at",
            "deleted_at",
            "id"
        ];

        $datosDeEvento = [
            "usuario_id" => 1,
            "nombre" => "para",
            "participan" => 1,
            "fecha" => "2001-1-2",
            "detalles" => "el super evento de carlos la revancha",
            "ubicacion" => "la casa de carlos"
        ];

        $response = $this->put('/api/evento/2', $datosDeEvento);
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDeEvento);
        $this->assertDatabaseHas('evento', [
            "usuario_id" => 1,
            "nombre" => "para",
            "participan" => 1,
            "fecha" => "2001-1-2",
            "detalles" => "el super evento de carlos la revancha",
            "ubicacion" => "la casa de carlos"
        ]);
    }

    public function test_ObtenerUnEventoQueNoExiste()
    {
        $response = $this->get('/api/evento/99999');
        $response->assertStatus(404);
    }

    public function test_EliminarEventoQueNoExiste()
    {
        $response = $this->delete('/api/evento/99999');
        $response->assertStatus(404);
    }

    public function test_ModificarEventoQueNoExiste()
    {
        $response = $this->put('/api/evento/99999');
        $response->assertStatus(404);
    }

    public function test_EliminarEvento()
    {
        $response = $this->delete('/api/evento/3');
        $response->assertStatus(200);
        $response->assertJsonStructure(['mensaje']);
        $response->assertJsonFragment(['mensaje' => 'evento eliminado']);

        $this->assertDatabaseMissing('evento', [
            'id' => '3',
            'deleted_at' => null
        ]);
    }
*/

}
