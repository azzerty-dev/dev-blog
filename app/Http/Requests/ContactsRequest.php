<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
                'Name'=>'required|min:5|max:30',
                'Theme'=>'required|min:3|max:30',
                'Email'=>'required|email',
                'Message'=>'required|min:10|max:3000',
        ];
    }

    public function messages()
    {
        return[
            'Name.required'=>'Поле имя является обязательным.',
            'Theme.required'=>'Поле тема является обязательным.',
            'Email.required'=>'Поле email является обязательным.',
            'Message.required'=>'Поле сообщение является обязательным.',

            'Name.min'=>'Имя должно состоять не менее чем из 5 символов.',
            'Theme.min'=>'В теме должно быть не менее 3 символов.',
            'Message.min'=>'Сообщение должно состоять не менее чем из 10 символов.',

            'Name.max'=>'Имя должно состоять не более чем из 30 символов.',
            'Theme.max'=>'В теме должно быть не более 30 символов.',
            'Message.max'=>'Сообщение должно состоять не более чем из 3000 символов.',

            'Email.email'=>'Электронная почта должна быть действующим адресом.',
        ];
    }
}
