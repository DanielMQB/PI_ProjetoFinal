<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAtrativo extends FormRequest
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
            'nome' => 'required',
            'descricao' => 'required | max:250',
            'duracao' => 'required | Integer',
            'tipo'=> 'required | max:30',
            'capacidade' => 'required | Integer',
            'observacoes' => 'max:250',
            'unidade_id' => 'required | Integer'
        ];
    }
}
