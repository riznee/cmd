<?php

namespace App\Validators;

class ArticleValidator {


    public $createValidation = array([
        'slug'    => 'required|max:255',
        'title'   => 'required|max:255',
        'page_id' => 'required|numeric', 
        'published_at'=> 'nullable|numeric', 
        'description' => 'required|max255',    
        'content'     => 'required|min:3|max:10000', 
        'category_id' => 'required|numeric',
    ]);

    public $updateValidation = array([
        'slug'    => 'required|max:255',
        'title'   => 'required|max:255',
        'page_id' => 'required|numeric', 
        'published_at'=> 'nullable|numeric', 
        'description' => 'required|max255',    
        'content'     => 'required|min:3|max:10000', 
        'category_id' => 'required|numeric',
    ]);


}
