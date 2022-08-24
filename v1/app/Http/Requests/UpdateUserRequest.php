<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|min:3|max:25|required',
            'email' => 'email|required|unique:users,email,'.$this->route('usuario.id'),
            'perfis' => 'array|nullable',
        ];
    }
}
