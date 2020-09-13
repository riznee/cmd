<?php
 
 namespace App\Repositries;

 use App\Models\Category;


 class CategoryRepositry  extends BaseRepositry{

    public function __construct(Category $category)
    {
        parent::__construct($category);
    }
 }