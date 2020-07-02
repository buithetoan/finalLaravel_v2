<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class LoginRequest extends FormRequest
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
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'email'           => 'required|email|max:100',
            'password'           => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Please enter Email.',
            'email.email' => 'Email invalid.',
            'email.max' => 'Maximum Email length is 100 characters.',
            'password.required' => 'Please enter Password.',
        ];
    }
}
