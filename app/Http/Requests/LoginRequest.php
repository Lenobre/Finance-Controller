<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends BaseRequest
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
            "email" => "required|email",
            "password" => "required|min:8"
        ];
    }

    public function messages(): array
    {
        return [
            "email.required" => "O e-mail é obrigatório",
            "email.email" => "O e-mail é inválido",
            "password.required" => "A senha é obrigatória",
            "password.min" => "A senha deve ter pelo menos 8 caracteres"
        ];
    }
}
