<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
class UserRequest extends FormRequest
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
            'name' => 'required|max:50', 
            'email' => 'required|max:150|email|unique:brands,name,'.request()->segment(3).',id',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter Name!',
            'content.max:255' => 'Name must not exceed 255 characters!',
            'email.max' => 'Email must not exceed 150 characters!',
            'email.required' => 'Please enter Email!',
            'email.email' =>'Email invalid!',
            'password.required' => 'Please enter Password!',
            'password.min:6' => 'Password must be at least 6 characters!',
            'password.confirmed' => 'Password confirmation does not match!',
        ];
    }
}
