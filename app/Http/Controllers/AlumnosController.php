<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function listar () {
        return  Alumno::select(['nombre', 'apellido', 'cedula', 'nacimiento', 'edad'])->get();
    }

    public function buscar ($id) {
        return Alumno::select(['nombre', 'apellido', 'cedula', 'nacimiento', 'edad'])->find($id);
    }

    public function crear (Request $request) {
        $request->validate([
            'nombre' => 'required|max:50', // Requerido y máximo de 50 caracteres
            'apellido' => 'required|max:50', // Requerido y máximo de 50 caracteres
            'cedula' => 'required|max:10|integer', // Requerido y máximo de 50 caracteres, numérico
            'nacimiento' => 'required|date', //Requerido y fecha
            'edad' => 'required|integer', //Requerido y numérico
        ]);
        try {
            Alumno::create($request->all());
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }

    public function modificar (Request $request, $id) {
        $request->validate([
            'nombre' => 'required|max:50', // Requerido y máximo de 50 caracteres
            'apellido' => 'required|max:50', // Requerido y máximo de 50 caracteres
            'cedula' => 'required|max:10|integer', // Requerido y máximo de 50 caracteres, numérico
            'nacimiento' => 'required|date', //Requerido y fecha
            'edad' => 'required|integer', //Requerido y numérico
        ]);
        try {
            $alumno = Alumno::find($id);
            $alumno->update($request->all());
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }

    public function eliminar ($id) {
        try {
            $alumno = Alumno::find($id);
            $alumno->delete();
        } catch (QueryException $e) {
            $e->getBindings();
        }
    }
}
