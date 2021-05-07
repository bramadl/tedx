<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            'email_address' => 'required|string|email',
            'password' => 'required|string'
        ];
    }

    public function message()
    {
        return [
            'email_address.required' => 'Email tidak boleh dikosongkan.',
            'email_address.email' => 'Mohon tuliskan email yang valid.',
            'password.required' => 'Password tidak boleh dikosongkan',
        ];
    }
}
