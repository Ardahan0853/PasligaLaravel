<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class gecmisMaclarRequest extends FormRequest
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
            //
            'takim_1_name' => 'required','string',
            'takim_2_name' => 'required','string',
            'takim_1_score' => 'required','integer',
            'takim_2_score' => 'required','integer',
            'tarih' => 'required',
            'hakem' => 'required',
            'kordinator' => 'required'
        ];
    }
}
