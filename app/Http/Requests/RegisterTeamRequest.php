<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterTeamRequest extends FormRequest
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
            'first_name' => 'required|string|max:20',
            'last_name' => 'nullable|string|max:30',
            'email_address' => 'required|string|email|unique:users',
            'password' => 'required|string|min:4',
            'division' => 'required|string'
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
            'division.required' => 'Nomor HP tidak boleh dikosongkan.'
        ];
    }
}
