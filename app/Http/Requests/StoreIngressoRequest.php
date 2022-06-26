<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIngressoRequest extends FormRequest
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
            'data' => 'required | date',
            'status' => 'required | boolean',
            'quantidade' => 'required | integer',
            'tipoIngresso' => 'required | max:30 | min:3',
            'nomeComprador' => 'required | max:60 | min:5'
        ];
    }
}
