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
                'parent_id' => 'required|numeric|max:50|min:1',
                'display_order' => 'required|numeric|max:50|min:1',
            ];
        }else{
            return [
                'name' => 'required|string|max:50|min:1',
                'parent_id' => 'required|numeric|max:50|min:1',
                'display_order' => 'required|numeric|max:50|min:1',
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
            'parent_id.required' => 'Please enter Parent ID.',
            'parent_id.max' => 'Maximum Parent ID length is 50 characters.',
            'parent_id.min' => 'Minimum Parent ID length is 1 characters.',
            'parent_id.numeric' => 'Invalid! Parent ID only enter number.',
            'display_order.required' => 'Please enter Display Order.',
            'display_order.max' => 'Maximum Display Order length is 50 characters.',
            'display_order.min' => 'Minimum Display Order length is 1 characters.',
            'display_order.numeric' => 'Invalid! Display Order only enter number.',
        ];
    }
}
