<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\HistorialClinicoController;

Route::resource('pacientes', PacienteController::class);
Route::resource('medicos', MedicoController::class);
Route::resource('historial_clinico', HistorialClinicoController::class);

Route::get('/', function () {
    return view('welcome');
});

