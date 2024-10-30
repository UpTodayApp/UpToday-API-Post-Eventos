<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Usuario;

class UsuarioTest extends TestCase
{

    public function test_CrearUnUsuario()
    {
        $estructuraEsperable = [
            "id",
            "nombre",
            "contrasenia",
            "correo",
            "created_at",
            "updated_at",
        ];

        $datosDeUsuario = [
            "nombre" => "Nuevo Usuario",
            "correo" => "nuevo.usuario@example.com",
            "contrasenia" => "password123",
        ];

        $response = $this->post('/api/usuario', $datosDeUsuario);
        $response->assertStatus(201);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDeUsuario);

        $this->assertDatabaseHas('usuario', $datosDeUsuario);
    }

    public function test_ObtenerListadoDeUsuarios()
    {
        $estructuraEsperable = [
            '*' => [
                "id",
                "nombre",
                "contrasenia",
                "correo",
                "created_at",
                "updated_at",
                "deleted_at",
            ],
        ];

        $response = $this->get('/api/usuario');
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ObtenerUnUsuario()
    {
        $usuario = Usuario::factory()->create();
        $estructuraEsperable = [
            "id",
            "nombre",
            "contrasenia",
            "correo",
            "created_at",
            "updated_at",
            "deleted_at",
        ];

        $response = $this->get('/api/usuario/' . $usuario->id);
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
    }

    public function test_ModificarUsuario()
    {
        $usuario = Usuario::factory()->create();
        $estructuraEsperable = [
            "id",
            "nombre",
            "contrasenia",
            "correo",
            "created_at",
            "updated_at",
            "deleted_at",
        ];

        $datosDeUsuario = [
            "nombre" => "Usuario Modificado",
            "correo" => "modificado.usuario@example.com",
        ];

        $response = $this->put('/api/usuario/' . $usuario->id, $datosDeUsuario);
        $response->assertStatus(200);
        $response->assertJsonStructure($estructuraEsperable);
        $response->assertJsonFragment($datosDeUsuario);

        $this->assertDatabaseHas('usuario', $datosDeUsuario);
    }

    public function test_EliminarUsuario()
    {
        $usuario = Usuario::factory()->create();
        $response = $this->delete('/api/usuario/' . $usuario->id);
        $response->assertStatus(200);
        $response->assertJsonStructure(['mensaje']);
        $response->assertJsonFragment(['mensaje' => 'usuario eliminado']);

        $this->assertDatabaseMissing('usuario', [
            'id' => $usuario->id,
            'deleted_at' => null,
        ]);
    }
}