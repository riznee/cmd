<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules($id)
    {
        
        return [
            'name' => 'required |unique:name',$id,
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
