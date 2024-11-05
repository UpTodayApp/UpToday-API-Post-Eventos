<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\megusta;

class MegustaController extends Controller
{
    
    public function Crear(Request $request)
    {
        if ($request->has("usuario_id") && ($request->has("post_id") || $request->has("comentario_id"))) {
            $megusta = new megusta();
            $megusta->usuario_id = $request->post("usuario_id");
            
            if ($request->has("post_id")) {
                $megusta->post_id = $request->post("post_id");
            } else {
                $megusta->comentario_id = $request->post("comentario_id");
            }

            $megusta->save();
            return $megusta;
        }
        return response()->json(["error mesage" => "error al crear me gusta"]);
    }

    public function ListarTodas(Request $request)
    {
        return megusta::all();
    }

    public function ListarUna(Request $request, $id)
    {
        return megusta::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->delete();
        return ['mensaje' => 'megusta eliminado'];
    }

    public function Modificar(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->usuario_id = $request->post("usuario_id");

        if ($request->has("post_id")) {
            $megusta->post_id = $request->post("post_id");
        } else if ($request->has("comentario_id")) {
            $megusta->comentario_id = $request->post("comentario_id");
        }

        $megusta->save();
        return $megusta;
    }

    }
