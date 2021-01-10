<?php

namespace App\Http\Requests\Role;
use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return true;
    // }

    public function rules()
    {
        return [
            'name' => 'required|unique:roles,name',
            'guard_name' => 'required',
        ];
    } 

    public function messages()
    {
        return [
            'name.required'      => ' The slug should be uniquie with maxmium size of 255 charachers',
            'guard_name.required'     => 'The name is maximucm size 255 char',
            
        ];
    }
    
}