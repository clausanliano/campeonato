<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCampeonatoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  =>  'required|min:5|unique:campeonatos',
            'abertura'  =>  'required|after:today',
            'encerramento'  =>  'required|after:abertura',
            'observacao'  =>  'string|nullable',

        ];
    }
}
