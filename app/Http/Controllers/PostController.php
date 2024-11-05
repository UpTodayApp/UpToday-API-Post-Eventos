<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\p_evento;

class PostController extends Controller
{
    public function Crear(Request $request)
    {
        if ($request->has("contenido")) {
            $post = new Post();
            $post->contenido = $request->post("contenido");
            $post->save();

            if($request->post("evento_id") !== "") {
                $p_evento = new p_evento();
                $p_evento->post_id = $post->id;
                $p_evento-> evento_id = $request->post("evento_id");
                $p_evento->save();
                }

            return $post;
        }
        return response()->json(["error mesage" => "no se pudo crear el post"]);
    }

    public function ListarTodas(Request $request)
    {
        return Post::all();
    }

    public function ListarUna(Request $request, $id)
    {
        return Post::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return ['mensaje' => 'post eliminado'];
    }

    public function Modificar(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->contenido = $request->post("contenido");
        $post->save();
        return $post;
    }
}
