<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoriaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  =>  'required|min:5|unique:categorias,nome,'.$this->route('categorium.id'),
            'faixa_etaria'  =>  'required|min:5',
        ];
    }
}
