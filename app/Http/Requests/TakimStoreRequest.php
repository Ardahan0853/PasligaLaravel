<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TakimStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'degerli_oyuncu' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'o' => 'required|string',
            'g' => 'required|string',
            'b' => 'required|string',
            'm' => 'required|string',
            'a' => 'required|string',
            'y' => 'required|string',
            'av' => 'required|string',
            'p' => 'required|string',
            'bn' => 'required|string',
        ];
    }

}
