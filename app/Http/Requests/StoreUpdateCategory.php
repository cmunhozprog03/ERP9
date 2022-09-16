<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCategory extends FormRequest
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
        $url = $this->segment(3);
        return [
            'name' => "required|min:3|max:255|unique:categories,name,{$url},url",
            'description' => 'nullable|min:3|max:2000',
            'photo' => 'nullable|image|max:4096'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é requerido.',
            'min' => 'Este campo deve conter no mínimo 3 caracteres.',
            'nome.max' => 'Este campo deve conter no máximo 255 caracteres.',
            'description.max' => 'Este campo deve conter no máximo 2000 caracteres.',
            'photo' => 'O arquivo ecolhido deve ser uma imagem em: jpeg, png ou jpg.',
            'photo.max' => 'O tamanho da imagem não pode ultrapassar a 4MB.'
        ];
    }
}
