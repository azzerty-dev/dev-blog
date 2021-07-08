<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){

        return [
            'title'=>'required',
            'body'=>'required',
            'status'=>'required',
            'project'=>'required',
            'image'=>'required',
        ];
    }

    public function messages(){

        return[
            'title.required'=>'Поле заголовок является обязательным.',
            'body.required'=>'Поле содержание является обязательным.',
            'status.required'=>'Поле статус является обязательным.',
            'image.required'=>'Поле изображение является обязательным.',
        ];
    }
}
