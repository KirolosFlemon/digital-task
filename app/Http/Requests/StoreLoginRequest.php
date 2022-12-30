<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
{
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' =>'required|email',
            'password' => 'required|string|min:4',
        ];
    }
    public function messages()
    {
        return [
            'email.required' =>'E-mail Required ',
            'email.email' =>'Please Enter  Email',
            'password.required' =>'Please Enter  Password',
        ];
    }
}
