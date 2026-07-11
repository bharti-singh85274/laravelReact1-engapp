<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

   public function rules()
{
    return [

        'name' => [
            'required',
            'string',
            'min:3',
            'max:50',
            'regex:/^[A-Za-z ]+$/'
        ],

        'email' => [
            'required',
            'email:rfc,dns',
            'max:100',
            'unique:users,email'
        ],

        'password' => [
            'required',
            'string',
            'min:8',
            'confirmed'
        ],

    ];
}


  
public function messages()
{
    return [

        'name.required' =>
            'Please enter your full name.',

        'name.min' =>
            'Name must contain at least 3 characters.',

        'name.regex' =>
            'Name can contain only letters and spaces.',

        'email.required' =>
            'Please enter your email address.',

        'email.email' =>
            'Please enter a valid email address.',

        'email.unique' =>
            'This email is already registered.',

        'password.required' =>
            'Please enter your password.',

        'password.min' =>
            'Password must be at least 8 characters.',

        'password.confirmed' =>
            'Passwords do not match.',

    ];
}



}