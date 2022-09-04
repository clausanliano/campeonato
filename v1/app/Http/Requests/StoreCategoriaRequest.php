<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  =>  'required|min:5|unique:categorias',
            'faixa_etaria'  =>  'required|min:5',
        ];
    }
}
