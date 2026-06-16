<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\VacinaController;
use App\Http\Controllers\UsuarioController;

Route::apiResource('animais', AnimalController::class);
Route::apiResource('medicamentos', MedicamentoController::class);
Route::apiResource('vacinas', VacinaController::class);
Route::apiResource('usuarios', UsuarioController::class);