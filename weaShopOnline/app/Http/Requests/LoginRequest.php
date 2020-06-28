<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
    public function rules()
    {
        return [
            'email'           => 'required|max:255|email',
            'password'           => 'required|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Please enter Email!',
            'email.max:255' => 'Maximum Email length is 255 characters!',
            'email.email' => 'Email invalid!',
            'password.required' => 'Please enter Password!',
            'password.confirmed' => 'Password confirmation does not match!',
        ];
    }
}
