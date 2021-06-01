<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class CheckoutRequest extends FormRequest
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
        Session::forget(['shipping_information', 'card_information']);
        $rules = [];

        $rules['name'] = [
            'required',
            'string',
            'max:255'
        ];
        $rules['email'] = [
            'required',
            'string',
            'max:255'
        ];
        $rules['address'] = [
            'required',
            'string',
            'max:1000'
        ];
        $rules['country'] = [
            'required',
            'string',
            'max:255'
        ];
        $rules['city'] = [
            'required',
            'string',
            'max:255'
        ];
        $rules['postal_code'] = [
            'required',
            'string',
            'max:255'
        ];
        $rules['phone'] = [
            'required',
            'string',
            'max:255'
        ];

        $rules['payment_method'] = [
            'nullable',
            'string',
            Rule::in(['Card', 'PayPal'])
        ];

        if ($this->payment_method === 'Card') {
            $rules['card_number'] = [
                'required',
                'string',
                'max:20'
            ];
            $rules['card_cvc'] = [
                'required',
                'string',
                'max:4'
            ];
            $rules['expiry_month'] = [
                'required',
                'digits:2',

            ];
            $rules['expiry_year'] = [
                'required',
                'digits:4',

            ];
        }

        return $rules;
    }
}
