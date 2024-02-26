<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function listar () {
        return Profesor::select(['profesores.nombre', 'profesores.apellido', 'profesores.cedula', 'asignaturas.nombre AS asignatura', 'asignaturas.descripcion'])
            ->join('asignaturas', 'profesores.id_asignatura', '=', 'asignaturas.id_asignatura')
            ->get();
    }

    public function buscar ($id) {
        return Profesor::select(['profesores.nombre', 'profesores.apellido', 'profesores.cedula', 'asignaturas.nombre AS asignatura', 'asignaturas.descripcion'])
            ->join('asignaturas', 'profesores.id_asignatura', '=', 'asignaturas.id_asignatura')
            ->find($id);
    }

    public function crear (Request $request) {
        $request->validate([
            'nombre' => 'required|max:50', // Requerido y máximo de 50 caracteres
            'apellido' => 'required|max:50', // Requerido y máximo de 50 caracteres
            'cedula' => 'required|max:10|integer', // Requerido y máximo de 50 caracteres, numérico
            'id_asignatura' => 'required', //Requerido
        ]);
        try {
            Profesor::create($request->all());
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }

    public function modificar (Request $request, $id) {
        $request->validate([
            'nombre' => 'required|max:50', // Requerido y máximo de 50 caracteres
            'apellido' => 'required|max:50', // Requerido y máximo de 50 caracteres
            'cedula' => 'required|max:10|integer', // Requerido y máximo de 50 caracteres, numérico
            'id_asignatura' => 'required', //Requerido
        ]);
        try {
            $profesor = Profesor::find($id);
            $profesor->update($request->all());
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }

    public function eliminar ($id) {
        try {
            $profesor = Profesor::find($id);
            $profesor->delete();
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }
}
