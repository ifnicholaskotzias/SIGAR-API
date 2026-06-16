<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $usuarioId = $this->route('usuario');

        return [
            'nome'=> ['required', 'string', 'max:255'],
            'email' => "required|email|max:255|unique:usuarios,email,{$usuarioId}",
            'senha' => ['required', 'string', 'min:8'],
            'cpf' => "required|max:14|unique:usuarios,cpf,{$usuarioId}", 
            'telefone' => ['required', 'string', 'max:20'],
            'matricula' => ['required', 'string', 'max:20'],
        ];
    }
}