<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEducationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'school' => 'required',
            'schoolLevel' => 'required',
            'schoolStartDate' => 'required',
            'SchoolEndDate' => ''
        ];
    }

    public function messages(): array
    {
        return [
            'school.required' => 'School name is required',
            'schoolLevel.required' => 'Field of study / faculty is required',
            'schoolStartDate.required' => 'Study start date is required',
        ];
    }
}
