<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::apiResource('animais', AnimalController::class);