<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                'name' => 'required|string|max:50|min:5',
                'code' => 'required|max:50|min:1',
                'url_image' => 'required|image',
                'price' => 'required|numeric|min:1',
                'promotion_price' => 'required|numeric|min:1',
                'quantity' => 'required|numeric|min:1',
                'brand_id' => 'required',
                'category_id' => 'required',
            ];
        }else{
            return [
                'name' => 'required|string|max:50|min:5',
                'code' => 'required|max:50|min:1',
                'url_image' => 'required|image',
                'price' => 'required|numeric|min:1',
                'promotion_price' => 'required|numeric|min:1',
                'quantity' => 'required|numeric|min:1',
                'brand_id' => 'required',
                'category_id' => 'required',
            ];
        } 
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter Name.',
            'name.string' => 'Do not enter special characters.',
            'name.max' => 'Maximum Name length is 50 characters.',
            'name.min' => 'Minimum Name length is 5 characters.',
            'code.required' => 'Please enter Code.',
            'code.max' => 'Maximum Code length is 50 characters.',
            'code.min' => 'Minimum Code length is 1 characters.',
            'url_image.required' => 'Please choose Image.',
            'url_image.image' => 'Image must be a photo (jpeg, png, bmp, gif, or svg).',
            'price.required' => 'Please enter Price.',
            'price.numeric' => 'Invalid! Price only enter number.',
            'price.min' => 'Price invalid.',
            'promotion_price.required' => 'Please enter Promotion Price.',
            'promotion_price.numeric' => 'Invalid! Promotion Price only enter number.',
            'promotion_price.min' => 'Promotion Price invalid.',
            'quantity.required' => 'Please enter Quantity.',
            'quantity.numeric' => 'Invalid! Quantity only enter number.',
            'quantity.min' => 'Quantity invalid.',
            'brand_id.required' => 'Please choose Brand.',
            'category_id.required' => 'Please choose Category.',
        ];
    }
}