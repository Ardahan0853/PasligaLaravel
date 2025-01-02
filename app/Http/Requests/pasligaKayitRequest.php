<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pasligaKayitRequest extends FormRequest
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
            'tc_no' => 'required|numeric|digits:11|unique:users,tc_no',
            'phone' => 'required|numeric|digits:11|unique:users,phone',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'shoe_number' => 'required|numeric',
            'back_number' => 'required|numeric',
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'email' => 'required|string|email|max:50|unique:users,email',
            'birth_date' => 'required|date',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'string|in:user,admin',
            'position' => 'required|string|max:255',
            'agree' => 'required|accepted',
        ];


    }
}
