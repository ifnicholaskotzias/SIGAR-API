<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacina extends Model
{
    use softDeletes;

    protected $table = 'vacinas';

    protected $fillable = [
        'nome',
        'fabricante',
        'doenca_alvo',
        'frequencia_dias',
        'observacoes',
    ];
}
