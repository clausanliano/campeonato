<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAtletaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $tres_anos_atras = Carbon::now()->subYear(3)->format('Y-m-d');
        return [
            'cpf' =>   'required|min:11|max:11|unique:atletas,cpf,'.$this->route('atletum.id'),
            'nome' =>   'required|min:10',
            'nascimento' =>   'required|date|before:'.$tres_anos_atras,
            'email' =>   'required|email',
        ];
    }
}
