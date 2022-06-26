<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIngressoRequest extends FormRequest
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
            'quantidade' => 'required | Integer',
            'tipoIngresso' => 'required | max:25 | min:3',
            'nomeComprador' => 'required | max:100 | min: 3',
            'parque_id' => 'required | Integer'
        ];
    }
}
