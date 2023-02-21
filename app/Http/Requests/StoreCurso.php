<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name' => ['required'],
            'description' => ['required'],
            'category' => ['required']
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'nombre del curso',
            'description' => 'descripción del curso',
            'category'=>'campo categoria del curso'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Debe ingresar una descripción de un curso'
        ];
    }
}
