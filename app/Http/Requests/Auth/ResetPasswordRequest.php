<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'email' => 'required|email',

            'otp' => 'required|digits:6',

            'password' => 'required|min:8|confirmed'

        ];
    }

    public function messages()
    {
        return [

            'password.required' => 'Password is required.',

            'password.confirmed' => 'Passwords do not match.'

        ];
    }
}