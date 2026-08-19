<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\VacinaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DashboardController;

Route::apiResource('animais', AnimalController::class);
Route::apiResource('medicamentos', MedicamentoController::class);
Route::apiResource('vacinas', VacinaController::class);
Route::apiResource('usuarios', UsuarioController::class);
Route::get('/dashboard/stats', [DashboardController::class, 'getStats']);