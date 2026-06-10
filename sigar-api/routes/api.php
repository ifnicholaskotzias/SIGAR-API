<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\MedicamentoController;

Route::apiResource('animais', AnimalController::class);
Route::apiResource('medicamentos', MedicamentoController::class);