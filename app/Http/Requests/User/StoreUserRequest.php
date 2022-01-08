<?php

namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return true;
    // }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            // 'roles' => 'required'
        ];
    } 

    public function messages()
    {
        return [
            'name.required'      => ' The slug should be uniquie with maxmium size of 255 charachers',
            'email.required'     => 'The name is maximucm size 255 char',
            'password.required' => 'The name is maximucm size 255 char',
        ];
    }
    
}