<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUnidade extends FormRequest
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
            'nome' => 'required | max:60 | min:5',
            'quantidade' => 'required | integer',
            'valorIngresso' => 'required | integer',
            'descricao' => 'required | max:250 | min:5',
            'endereco' => 'required | max:250 | min:5'
        ];
    }
}
