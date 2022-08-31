<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClubeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'string|required',
            'endereco' => 'string|nullable',
            'observacao' => 'string|nullable',
            'telefone' => 'string|nullable',
            'site' => 'string|nullable',
            'email' => 'string|nullable',
            'instagram' => 'string|nullable',
            'twitter' => 'string|nullable',
            'logotipo'  => 'image|nullable|dimensions:min_width=600,min_height=400',
        ];
    }
}
