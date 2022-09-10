<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProvaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'string|required',
            'observacao' => 'string|nullable',
            'qtd_atletas' => 'required|numeric|min:1|max:5',
        ];
    }
}
