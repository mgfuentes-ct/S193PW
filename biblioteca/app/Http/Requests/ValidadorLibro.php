<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorLibro extends FormRequest
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
            'txtisbn' => 'required|digits:13|numeric',
            'txttitulo' => 'required|string|max:150',
            'txtautor' => 'required',
            'txtpaginas' => 'required|integer|min:1',
            'txtaño' => 'required|integer|digits:4|min:1000|max:' . now()->year,
            'txteditorial' => 'required|string|max:100',
            'txtemail' => 'required|email'
        ];
    }
}
