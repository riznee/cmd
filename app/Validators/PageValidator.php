<?php

namespace App\Validators;

class PageValidator {


    public $createValidation = array([
        'slug'      => 'required|unique:posts|max:255',
        'parent_id' => 'nullable|numeric',
        'depth'     => 'nullable|numeric',
        'title'     => 'required|max:255',
        'description' => 'required|max255',
    ]);

    public $updateValidation = array([
        'slug'      => 'required|unique:posts|max:255',
        'parent_id' => 'nullable|numeric',
        'depth'     => 'nullable|numeric',
        'title'     => 'required|max:255',
        'description' => 'required|max255',
    ]);


}
