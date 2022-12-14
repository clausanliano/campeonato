<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePerfilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'string|min:3|max:25|required|unique:perfis,nome,'.$this->route('pefil.id'),
            'descricao' => 'string|nullable',
            'permissoes' => 'array|nullable',
        ];
    }
}
