<?php

namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return true;
    // }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|same:confirm-password',
        ];
    } 

    public function messages()
    {
        return [
            'slug.required'      => ' The slug should be uniquie with maxmium size of 255 charachers',
            'title.required'     => 'The name is maximucm size 255 char',
            'description.required' => 'The name is maximucm size 255 char',
        ];
    }
    
}