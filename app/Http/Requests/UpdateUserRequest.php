<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use phpseclib3\Crypt\Hash;

class UpdateUserRequest extends FormRequest
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

            'email' =>'required|email|unique:users,email,'.auth()->user()->id,
            'user_name' =>'string|min:3|max:150',
            'password' => 'string|min:4|confirmed',
            'date_of_birth' =>'date',
            'phone_number' => 'numeric|digits:11',
        ];

    }
    public function messages()
    {
        return [
            'email.required' =>'E-mail Required ',
            'email.email' =>'Please Enter  Email',
            'email.unique' =>'This E-mail Already Taken',
            'user_name.required' =>'Please Enter  User Name',
            'user_name.min' =>'Name Minimum Character is 3',
            'user_name.max' =>'Name Maximum Character is 150',
            'password.required' => 'Password is Required',
            'password.min' => 'Password Minimum Character is 4',
            'phone_number.numeric' => 'Please Enter Only Numbers',
            'phone_number.digits' => 'Phone Number is 11 digits',
        ];
    }




}
