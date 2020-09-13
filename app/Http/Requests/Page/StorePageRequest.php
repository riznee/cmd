<?php

namespace App\Http\Requests\Page;
use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return true;
    // }

    public function rules()
    {
        return [
            'slug'      => 'required|unique:pages|max:255',
            'parent_id' => 'nullable|numeric',
            'depth'     => 'nullable|numeric',
            'title'     => 'required|max:255',
            'description' => 'required|max:255',
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