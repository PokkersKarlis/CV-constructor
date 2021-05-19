<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddExperienceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company' => 'required',
            'position' => 'required',
            'stack' => 'required',
            'jobStartDate' => 'required',
            'jobEndDate' => '',
            'description' => 'required',
            'condition' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'company.required' => 'Company name is required',
            'position.required' => 'Position is required',
            'stack.required' => 'Stack is required',
            'jobStartDate.required' => 'Job starting date is required',
            'description.require' => 'Description is required',
            'condition.require' => 'Condition is required'
        ];
    }
}
