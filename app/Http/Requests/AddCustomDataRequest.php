<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCustomDataRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'title.request' => 'Title is required',
            'description' => 'Description is required'
        ];
    }
}
