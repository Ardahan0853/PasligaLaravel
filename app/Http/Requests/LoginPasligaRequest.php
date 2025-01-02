<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginPasligaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public
    function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     *
     */
    public
    function rules(): array
    {

        //
        return [
            'email' => 'required|string|email|max:50',
            'password' => 'required|string|min:8',
        ];


    }
}
