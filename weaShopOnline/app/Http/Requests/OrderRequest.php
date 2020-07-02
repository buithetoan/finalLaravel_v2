<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
                'order_status' => 'required',
                'payment_status' => 'required',
                'customer_id' => 'required',
            ];
        }else{
            return [
                'order_status' => 'required',
                'payment_status' => 'required',
                'customer_id' => 'required',
            ];
        }
    }

    public function messages()
    {
        return [
            'order_status.required' => 'Please enter Order status.',
            'payment_status.required' => 'Please enter Payment status.',
            'customer_id.required' => 'Please enter Customer.',
        ];
    }
}
