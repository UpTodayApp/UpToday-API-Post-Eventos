<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\megusta;

class MegustaController extends Controller
{
    public function CrearPost(Request $request)
    {
        if ($request->has("usuario_id")) {


            $megusta = new megusta();
            $megusta->usuario_id = $request->post("usuario_id");
            $megusta->post_id = $request->post("post_id");
            $megusta->save();
            return $megusta;
        }
        return response()->json(["error mesage" => "error al crear me gusta"]);
    }

    public function ListarTodasPost(Request $request)
    {
        return megusta::all();
    }

    public function ListarUnaPost(Request $request, $id)
    {
        return megusta::findOrFail($id);
    }

    public function EliminarPost(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->delete();
        return ['mensaje' => 'Me gusta post eliminado'];
    }

    public function ModificarPost(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->usuario_id = $request->post("usuario_id");
        $megusta->post_id = $request->post("post_id");
        $megusta->save();
        return $megusta;
    }



    public function CrearComentario(Request $request)
    {
        if ($request->has("usuario_id")) {


            $megusta = new megusta();
            $megusta->usuario_id = $request->post("usuario_id");
            $megusta->comentario_id = $request->post("comentario_id");
            $megusta->save();
            return $megusta;
        }
        return response()->json(["error mesage" => "no se pudo crear el megusta"]);
    }

    public function ListarTodasComentario(Request $request)
    {
        return megusta::all();
    }

    public function ListarUnaComentario(Request $request, $id)
    {
        return megusta::findOrFail($id);
    }

    public function EliminarComentario(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->delete();
        return ['mensaje' => 'Me gusta comentario eliminado'];
    }

    public function ModificarComentario(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->usuario_id = $request->post("usuario_id");
        $megusta->comentario_id = $request->post("comentario_id");
        $megusta->save();
        return $megusta;
    }
}
