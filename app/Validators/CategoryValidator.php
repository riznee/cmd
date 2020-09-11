<?php

namespace App\Validators;

class CategoryValidator {


    public $createValidation = array([
        'slug'      => 'required|unique:posts|max:255',
        'title'     => 'required|max:255',
        'description' => 'required|max255',
        'color' => 'required|max255',
    ]);

    public $updateValidation = array([
        'slug'      => 'required|unique:posts|max:255',
        'title'     => 'required|max:255',
        'description' => 'required|max255',
        'color' => 'required|max255',
    ]);


}
