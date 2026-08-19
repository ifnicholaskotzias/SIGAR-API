<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Medicamento;
use App\Models\Vacina;

class DashboardController extends Controller
{
    public function getStats()
    {
        return response()->json([
            'animais' => Animal::count(),
            'medicamentos' => Medicamento::count(),
            'vacinas' => Vacina::count(),
        ]);
    }
}