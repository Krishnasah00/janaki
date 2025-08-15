<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        $rules = [
            'email' => 'required | email | min:3 | max:50',
            'password' => 'required | min:6 | max:50 '
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            /* Email Validation */
            'email.required' => 'Please enter email address',
            'email.email' => 'Please enter valid email address',
            'email.min' => 'Email address must be of 3 characters long',
            'email.max' => 'Email address should not greater than 50 characters long',

            /* Password Validation */
            'password.required' => 'Please enter your password',
            'password.min' => 'Password must be of 6 characters long',
            'password.max' => 'Password should not greater than 50 characters long',
        ];
    }
}
