<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'capacity' => 'required|numeric|min:1|max:40',
            'level' => 'required|alpha',
            'type' => 'required|alpha',
            'course_id' => 'required|numeric',
            'status' => 'required|alpha|In:done,doing,initial',

        ];
    }
}
