<?php
 
 namespace App\Repositries;

 use App\Models\Category;
 use App\Validators\CategoryValidator;

 class CategoryRepositry  extends BaseRepositry{

    public function __construct(Category $category, CategoryValidator $categoryValidator)
    {
        parent::__construct($category, $categoryValidator);
    }
 }