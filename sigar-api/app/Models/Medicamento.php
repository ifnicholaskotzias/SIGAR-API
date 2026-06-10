<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicamento extends Model
{
    use softDeletes;

    protected $table = 'medicamentos';

    protected $fillable = [
        'nome',
        'principio_ativo',
        'fabricante',
        'apresentacao',
        'observacoes',
    ];
}
