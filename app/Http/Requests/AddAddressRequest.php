<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAddressRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'houseNumber' => 'numeric',
            'flatNumber' => 'numeric',
            'postalCode' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'country.required' => 'Country is required',
            'city.required' => 'City is required',
            'street.required' => 'Street name is required',
            'postalCode.required' => 'Postal code is required',
        ];
    }
}
