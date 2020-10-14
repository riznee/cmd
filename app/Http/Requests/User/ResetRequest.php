<?php

namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;

class ResetRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return true;
    // }

    public function rules()
    {
        return [
            'email' => 'required|email',
        ];
    } 

    public function messages()
    {
        return [
            
        ];
    }
    
}