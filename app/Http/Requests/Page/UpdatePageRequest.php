<?php

namespace App\Http\Requests\Page;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
            'slug'      => 'required|max:255'. $this->id,
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
