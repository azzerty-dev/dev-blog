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
            'email' => 'required|email|max:50',
            'password' => 'required|min:6|max:60',
        ];
    }

    public function messages()
    {
        return[
            'email.required'=>'Поле email является обязательным.',
            'password.required' => 'Поле пароль является обязательным.',

            'email.max'=>'Email должен состоять не более чем из 50 символов.',
            'password.max'=>'Пароль должен состоять не более чем из 60 символов.',

            'password.min'=>'Пароль должнен состоять не менее чем из 6 символов.',

            'email.email'=>'Электронная почта должна быть действующим адресом.',
        ];
    }
}
