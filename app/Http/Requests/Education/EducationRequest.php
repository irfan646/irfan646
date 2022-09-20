<?php

namespace App\Http\Requests\Education;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'course' => 'required|max:255',
            'description' => 'required|max:255',
            'school' => 'required|max:255',
            'starting_date' => 'required|max:255',
            'end_date' => 'required|max:255'
        ];
    }
}
