<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    public function listar () {
        return Calificacion::select(['calificaciones.calificacion', 'alumnos.nombre', 'alumnos.apellido', 'alumnos.cedula',
            'alumnos.edad', 'alumnos.nacimiento', 'asignaturas.nombre as asignatura', 'asignaturas.descripcion'])
            ->join('alumnos', 'calificaciones.id_alumno', '=', 'alumnos.id_alumno')
            ->join('asignaturas', 'calificaciones.id_asignatura', '=', 'asignaturas.id_asignatura')
            ->get();
    }

    public function buscar ($id) {
        return Calificacion::select(['calificaciones.calificacion', 'alumnos.nombre', 'alumnos.apellido', 'alumnos.cedula',
            'alumnos.edad', 'alumnos.nacimiento', 'asignaturas.nombre as asignatura', 'asignaturas.descripcion'])
            ->join('alumnos', 'calificaciones.id_alumno', '=', 'alumnos.id_alumno')
            ->join('asignaturas', 'calificaciones.id_asignatura', '=', 'asignaturas.id_asignatura')
            ->find($id);
    }

    public function crear (Request $request) {
        $request->validate([
            'id_alumno' => 'required', // Requerido
            'id_asignatura' => 'required', // Requerido
            'calificacion' => 'required|integer' //Requerido y numérico
        ]);
        try {
            Calificacion::create($request->all());
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }

    public function modificar (Request $request, $id) {
        $request->validate([
            'id_alumno' => 'required', // Requerido
            'id_asignatura' => 'required', // Requerido
            'calificacion' => 'required|integer' //Requerido y numérico
        ]);
        try {
            $calificacion = Calificacion::find($id);
            $calificacion->update($request->all());
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }

    public function eliminar ($id) {
        try {
            $calificacion = Calificacion::find($id);
            $calificacion->delete();
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }
}
