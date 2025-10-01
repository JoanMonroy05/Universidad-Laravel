<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ConsultaHorarioController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('horarios', HorarioController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('docentes', DocenteController::class);
Route::resource('asignaturas', AsignaturaController::class);

Route::get('/consultas', [ConsultaHorarioController::class, 'index'])->name('consultas.index');
Route::post('/consultas', [ConsultaHorarioController::class, 'buscar'])->name('consultas.buscar');
