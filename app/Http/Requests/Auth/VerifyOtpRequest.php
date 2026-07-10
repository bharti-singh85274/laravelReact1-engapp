<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class VerifyOtpRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'email' => 'required|email',

            'otp' => 'required|digits:6'

        ];
    }

    public function messages()
    {
        return [

            'otp.required' => 'OTP is required.',

            'otp.digits' => 'OTP must be 6 digits.'

        ];
    }
}