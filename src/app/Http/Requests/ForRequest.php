<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForRequest extends FormRequest
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
            'name' => 'required','string',
            'tel' => 'required','numeric',
            'content' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => '名前を入力して下さい',
            'name.string' => '名前を文字列で入力して下さい',
            'tel.required' => '電話番号を入力して下さい',
            'tel.numeric' => '電話番号を数値で入力して下さい',
            'content.required' => 'お問合せ内容を入力して下さい'
        ];
    }
}
