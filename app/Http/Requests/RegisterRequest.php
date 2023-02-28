<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5',
            'name' => 'required|max:100',
            'surname' => 'required|max:100',
            'rp_pwd' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'You have to specify your email.',
            'email.unique' => 'This email is already on use!!!! :(',
            'password.required' => 'The password is required',
            'password.min' => 'The password can not be less than 5 characters.',
            'rp_pwd.required' => 'The two password must match º-º'

        ];
    }
}
