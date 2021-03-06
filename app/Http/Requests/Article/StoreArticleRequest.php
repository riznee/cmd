<?php

namespace App\Http\Requests\Article;
use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return true;
    // }

    public function rules()
    {
        return [
            'slug'    => 'required|unique:articles|max:255',
            'title'   => 'required|max:255',
            'page_id' => 'required|numeric', 
            'published_at'=> 'nullable|numeric', 
            'description' => 'required',    
            'content'     => 'required', 
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