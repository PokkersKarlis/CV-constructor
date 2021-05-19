<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCvRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
        ];
    }

    public function messages(): array
    {
        return [
            'firstName.required' => 'Name is required',
            'lastName.required' => 'Last name is required',
            'phone.required' => 'Phone number is required',
            'phone.numeric' => 'Phone number should contain only numbers',
            'email.required' => 'E-mail is required',
            'email.email' => 'Wrong e-mail format',
        ];
    }
}
