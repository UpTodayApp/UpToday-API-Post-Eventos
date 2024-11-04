<?php

namespace App\Http\Controllers;

use App\Models\evento;
use Illuminate\Http\Request;

class eventoController extends Controller
{
    public function Crear(Request $request)
    {
        if ($request->has("detalles")) {


            $evento = new evento();
            $evento->nombre = $request->post("nombre");
            $evento->participan = $request->post("participan");
            $evento->fecha = $request->post("fecha");
            $evento->detalles = $request->post("detalles");
            $evento->ubicacion = $request->post("ubicacion");
            $evento->save();
            return $evento;
        }
        return response()->json(["error mesage" => "no se pudo crear el evento"]);
    }

    public function ListarTodas(Request $request)
    {
        return evento::all();
    }

    public function ListarUna(Request $request, $id)
    {
        return evento::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $evento = evento::findOrFail($id);
        $evento->delete();
        return ['mensaje' => 'evento eliminado'];
    }

    public function Modificar(Request $request, $id)
    {
        $evento = evento::findOrFail($id);
        $evento->nombre = $request->post("nombre");
        $evento->participan = $request->post("participan");
        $evento->fecha = $request->post("fecha");
        $evento->detalles = $request->post("detalles");
        $evento->ubicacion = $request->post("ubicacion");
        $evento->save();
        return $evento;
    }
}
