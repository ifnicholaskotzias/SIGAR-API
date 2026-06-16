<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacinaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {        
        return [
            'nome' => ['required', 'string', 'max:255'],
            'fabricante' => ['nullable', 'string', 'max:255'],
            'doenca_alvo' => ['nullable', 'string', 'max:255'],
            'frequencia_dias' => ['nullable', 'integer'],
            'observacoes' => ['nullable', 'string'],
        ];
    }
}
