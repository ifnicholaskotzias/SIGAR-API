<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use softDeletes;

    protected $table = 'animais';

    protected $fillable = [
        'nome',
        'especie',
        'raca',
        'sexo',
        'data_nascimento',
        'peso_atual',
        'alergia',
        'status',
        'foto_path',
        'observacoes_gerais'
    ];
}
