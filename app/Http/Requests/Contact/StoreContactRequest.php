<?php

namespace App\Http\Requests\Contact;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return true;
    // }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    } 

    public function messages()
    {
        return [
            // 'slug.required'      => ' The slug should be uniquie with maxmium size of 255 charachers',
            // 'title.required'     => 'The name is maximucm size 255 char',
            // 'description.required' => 'The name is maximucm size 255 char',
        ];
    }
    
}