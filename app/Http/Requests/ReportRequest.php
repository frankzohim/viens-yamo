<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'id' => ['required', 'string'],
            'name' => ['required', 'string'],
            'myfile' => ['required', 'image', 'max:20480','mimes:jpg,png,jpeg'],
            'phone' => ['required','string'],
            'type' => ['required','string'], 
            'message' => ['required','string'], 
        ];
    }
}
