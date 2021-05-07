<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => [
                'required', 'string', 'max:20'
            ],
            'last_name' => [
                'nullable', 'string', 'max:30'
            ],
            'email_address' => [
                'required', 'email', 'unique:users'
            ],
            'password' => [
                'required', 'string', 'min:4'
            ],
            'phone_number' => [
                'nullable', 'string', 'regex:/^(\+62|62)?[\s-]?0?8[1-9]{1}\d{1}[\s-]?\d{3,8}$/'
            ]
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Nama depan tidak boleh dikosongkan.',
            'first_name.max' => 'Nama depan maksimal 20 karakter.',
            'last_name.max' => 'Nama belakang maksimal 30 karakter.',
            'email_address.required' => 'Email tidak boleh dikosongkan.',
            'email_address.email' => 'Mohon tuliskan email yang valid.',
            'email_address.unique' => 'Email telah terdaftar.',
            'password.required' => 'Password tidak boleh dikosongkan',
            'password.min' => 'Password minimal 4 karakter.',
            'phone_number.required' => 'Nomor HP tidak boleh dikosongkan.',
            'phone_number.regex' => 'Mohon tuliskan nomor HP yang valid.'
        ];
    }
}
