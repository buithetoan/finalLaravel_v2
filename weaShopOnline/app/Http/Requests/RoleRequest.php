<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => 'required|max:50|regex:/^[a-zA-Z0-9\_]*$/', 
            'display_name' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter Name!',
            'name.max' => 'Name must not exceed 50 characters!',
            'name.regex' => 'Name cannot enter special characters.',
            'display_name.required' => 'Please enter display name.',
            
        ];
    }
}
