<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AsignaturasController extends Controller
{
    public function listar () {
        return  Asignatura::select(['nombre', 'descripcion'])->get();
    }

    public function buscar ($id) {
        return  Asignatura::select(['nombre', 'descripcion'])->find($id);
    }

    public function crear (Request $request) {
        $request->validate([
            'nombre' => 'required|max:50', // Requerido y máximo de 50 caracteres
        ]);
        try {
            Asignatura::create($request->all());
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }

    public function modificar (Request $request, $id) {
        $request->validate([
            'nombre' => 'required|max:50', // Requerido y máximo de 50 caracteres
        ]);
        try {
            $asignatura = Asignatura::find($id);
            $asignatura->update($request->all());
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }

    public function eliminar ($id) {
        try {
            $asignatura = Asignatura::find($id);
            $asignatura->delete();
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }
}
