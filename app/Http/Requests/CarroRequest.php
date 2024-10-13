<?php

namespace App\Http\Requests;

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarroRequest extends FormRequest
{
    public function rules() {
        return [
            'modelo' => 'required|max:255',
            'marca' => 'required|max:255',
            'ano' => 'required|integer',
            'descricao' => 'nullable|string',
        ];
    }

    public function authorize() {
        return true; // Ajuste conforme necessário para controle de acesso
    }
}

