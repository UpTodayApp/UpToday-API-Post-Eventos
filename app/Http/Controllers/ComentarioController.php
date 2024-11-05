<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentario;
use App\Models\c_post;
use App\Models\c_evento;

class ComentarioController extends Controller
{

    public function Crear(Request $request)
    {
        if ($request->has("contenido")) {

            $comentario = new comentario();
            $comentario->contenido = $request->post("contenido");
            $comentario->save();

            if($request->post("post_id") !== "") {
            $c_post = new c_post();
            $c_post->post_id = $request->post("post_id");
            $c_post-> comentario_id = $comentario->id;
            $c_post->save();
            }

            if($request->post("evento_id") !== "") {
            $c_evento = new c_evento();
            $c_evento->evento_id = $request->post("evento_id");
            $c_evento-> comentario_id = $comentario->id;
            $c_evento->save();
            }
            return $comentario;
        }
        return response()->json(["error mesage" => "no se pudo crear el comentario"]);
    }

    public function ListarTodas(Request $request)
    {
        return comentario::all();
    }

    public function ListarUna(Request $request, $id)
    {
        return comentario::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $comentario = comentario::findOrFail($id);
        $comentario->delete();
        return ['mensaje' => 'comentario eliminado'];
    }

    public function Modificar(Request $request, $id)
    {
        $comentario = comentario::findOrFail($id);
        $comentario->contenido = $request->post("contenido");
        $comentario->save();
        return $comentario;
    }
}
