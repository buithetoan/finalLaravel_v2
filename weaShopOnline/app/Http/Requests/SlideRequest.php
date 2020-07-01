<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
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
                'content' => 'required|max:255|min:5|string',
                'description' => 'required|max:255|min:10',
                'image' => 'mimes:jpeg,jpg,png',
                'url' => 'required|max:255|min:1|string',
            ];
        }else{
            return [
                'content' => 'required|max:255|min:5|string',
                'description' => 'required|max:255|min:10',
                'image' => 'required|mimes:jpeg,jpg,png',
                'url' => 'required|max:255|min:1|string',
            ];
        }
    }

    public function messages()
    {
        return [
            'content.required' => 'Please enter content.',
            'content.string' => 'Do not enter special characters.',
            'content.max:255' => 'Maximum content length is 255 characters.',
            'content.min:5' => 'Minimum content length is 5 characters.',
            'description.required' => 'Please enter description.',
            'description.max:100' => 'Maximum description length is 255 characters.',
            'description.min:10' => 'Minimum description length is 10 characters.',
            'image.required' => 'Please select Image.',
            'image.mimes' => 'Please select file jpg/jpeg/png.',
            'url.required' => 'Please enter Slug.',
            'url.string' => 'Do not enter special characters.',
            'url.max:255' => 'Maximum url length is 255 characters.',
            'url.min:1' => 'Minimum url length is 1 characters.',
        ];
    }
}
