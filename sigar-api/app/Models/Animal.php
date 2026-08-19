<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Animal extends Model
{
    use SoftDeletes;

    protected $table = 'animais';

    protected $casts = [
        'data_nascimento' => 'date',
    ];

    protected $appends = ['idade', 'foto_url'];

    protected function idade(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (!$this->data_nascimento) {
                    return 'Idade desconhecida';
                }

                $diff = Carbon::parse($this->data_nascimento)->diff(Carbon::now());
                
                $anos = $diff->y;
                $meses = $diff->m;

                $textoAnos = $anos === 1 ? '1 ano' : $anos . ' anos';
                $textoMeses = $meses === 1 ? '1 mês' : $meses . ' meses';

                return "{$textoAnos} e {$textoMeses}";
            }
        );
    }

    protected function fotoUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (!$this->foto_path) {
                    return null; 
                }

                return asset('storage/' . $this->foto_path);
            }
        );
    }

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