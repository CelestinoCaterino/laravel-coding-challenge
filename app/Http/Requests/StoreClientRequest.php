<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'phone_number' => 'required|regex:#^\+[1-9]\d{1,14}$#',
            'email' => 'required|email|unique:clients',
            'address' => 'required|max:255',
            'nationality' => 'required|max:255',
            'date_of_birth' => 'required|date|before:today',
            'education_background' => 'required|max:255',
            'preferred_contact_method' => 'required|in:email,phone_number,none',
        ];
    }
}
