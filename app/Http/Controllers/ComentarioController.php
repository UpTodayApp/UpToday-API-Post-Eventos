<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentario;

class ComentarioController extends Controller
{

    public function Crear(Request $request)
    {
        if ($request->has("contenido")) {


            $comentario = new comentario();
            $comentario->contenido = $request->post("contenido");
            $comentario->save();
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
