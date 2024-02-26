<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\AsignaturasController;
use App\Http\Controllers\CalificacionesController;
use App\Http\Controllers\ProfesoresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/alumnos', [AlumnosController::class, 'listar']);
Route::get('api/alumnos/{id}', [AlumnosController::class, 'buscar']);
Route::post('api/alumnos', [AlumnosController::class, 'crear']);
Route::put('api/alumnos/{id}', [AlumnosController::class, 'modificar']);
Route::delete('api/alumnos/{id}', [AlumnosController::class, 'eliminar']);

Route::get('api/asignaturas', [AsignaturasController::class, 'listar']);
Route::get('api/asignaturas/{id}', [AsignaturasController::class, 'buscar']);
Route::post('api/asignaturas', [AsignaturasController::class, 'crear']);
Route::put('api/asignaturas/{id}', [AsignaturasController::class, 'modificar']);
Route::delete('api/asignaturas/{id}', [AsignaturasController::class, 'eliminar']);

Route::get('api/profesores', [ProfesoresController::class, 'listar']);
Route::get('api/profesores/{id}', [ProfesoresController::class, 'buscar']);
Route::post('api/profesores', [ProfesoresController::class, 'crear']);
Route::put('api/profesores/{id}', [ProfesoresController::class, 'modificar']);
Route::delete('api/profesores/{id}', [ProfesoresController::class, 'eliminar']);

Route::get('api/calificaciones', [CalificacionesController::class, 'listar']);
Route::get('api/calificaciones/{id}', [CalificacionesController::class, 'buscar']);
Route::post('api/calificaciones', [CalificacionesController::class, 'crear']);
Route::put('api/calificaciones/{id}', [CalificacionesController::class, 'modificar']);
Route::delete('api/calificaciones/{id}', [CalificacionesController::class, 'eliminar']);