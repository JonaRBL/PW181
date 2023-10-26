<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarRegistroLibro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtISBN' => 'required|numeric|digits_between:1,13',
            'txtPaginas' => 'required|numeric',
            'txtEmail' => 'required|email',
            'txtTitulo' => 'required',
            'txtAutor' => 'required',
            'txtEditorial' => 'required'
        ];
    }
}
