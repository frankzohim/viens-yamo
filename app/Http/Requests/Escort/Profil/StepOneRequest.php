<?php

namespace App\Http\Requests\Escort\Profil;

use Illuminate\Foundation\Http\FormRequest;

class StepOneRequest extends FormRequest
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
            'escort_name'=>"required",
            'age'=>"required",
            "skin_color_id"=>"required",
            "genre"=>"required",
            "town_id"=>"required"
        ];
    }
}
