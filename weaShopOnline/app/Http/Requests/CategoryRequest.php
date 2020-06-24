<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        if ($this->method()=='PUT'){
            return [
                'name' => 'required|string|max:50|min:1',
                'parent_id' => 'numeric|max:50|min:1',
            ];
        }else{
            return [
                'name' => 'required|string|max:50|min:1',
                'parent_id' => 'numeric|max:50|min:1',
            ];
        } 
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter Name.',
            'name.string' => 'Do not enter special characters.',
            'name.max:50' => 'Maximum Name length is 50 characters.',
            'name.min' => 'Minimum Name length is 1 characters.',
            'parent_id.max' => 'Maximum Parent ID length is 50 characters.',
            'parent_id.min' => 'Minimum Parent ID length is 1 characters.',
            'parent_id.numeric' => 'Invalid! Parent ID only enter number.'
        ];
    }
}
