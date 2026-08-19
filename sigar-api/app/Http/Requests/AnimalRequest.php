<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => ['nullable','string','max:255'],
            'especie' => ['required','string','max:100'],
            'raca' => ['nullable','string','max:100'],
            'sexo' => ['nullable','in:M,F,N/A'],
            'data_nascimento' => ['nullable','date'],
            'peso_atual' => ['nullable','numeric','min:0'],
            'alergia' => ['nullable','string'],
            'status' => ['required', 'in:RESGATADO,ADOTADO,OBITO'],
            'foto_path' => ['nullable','image','mimes:jpeg,png,jpg','max:2048'],
            'observacoes_gerais' => ['nullable','string']
        ];
    }
}