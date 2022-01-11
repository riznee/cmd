<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
    public function rules()
    {
        
        return [
            
            // 'slug'    => 'required|slug|unique:article'. $this->article ,
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
