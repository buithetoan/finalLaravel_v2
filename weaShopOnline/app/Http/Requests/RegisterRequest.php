<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RegisterRequest extends FormRequest
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
            'name'      => 'required|max:50|min:3|regex:/^[a-zA-Z0-9]*$/',
            'email'     => 'required|email|max:100',
            'password'  => 'required|min:8|confirmed',
            'full_name' => 'required|max:100|min:5|
                            not_regex:/[`\~\!\@\#\$\%\^\&\*\_\-\/\=\+\"\:\;\<\.\>\?]/',
            'address'   => 'required|max:100|min:10|
                            not_regex:/[`\~\!\@\#\$\%\^\&\*\_\=\+\"\:\;\<\.\>\?]/',
            'phone_no'  => 'required|regex:/^[0][0-9]*$/|size:10',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter Name.',
            'name.max' => 'Maximum Username length is 50 characters.',
            'name.min' => 'Minimum Username length is 3 characters.',
            'name.regex' => 'Username connot enter special characters.',
            'email.required' => 'Please enter Email.',
            'email.email' => 'Email invalid.',
            'email.max' => 'Maximum Email length is 100 characters.',
            'password.required' => 'Please enter Password.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.confirmed' => 'Password confirmation does not match.',
            'full_name.required' => 'please enter Full Name.',
            'full_name.max' => 'Maximum Fullname length is 100 characters.',
            'full_name.min' => 'Minimum Fullname length is 5 characters.',
            'full_name.not_regex' => 'Fullname cannot be enter special characters.',
            'address.required' => 'Please enter Address.',
            'address.max' => 'Maximum Fullname length is 100 characters.',
            'address.min' => 'Minimum Fullname length is 10 characters.',
            'address.not_regex' => 'Address cnnot enter special characters.',
            'phone_no.required' => 'Please enter Phone.',
            'phone_no.regex' => 'Phone number invalid.',
            'phone_no.size' => 'Phone number must be 10 digits',
        ];
    }
}
