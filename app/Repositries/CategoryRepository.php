<?php
 
 namespace App\Repositries;

 use App\Models\Category;


 class CategoryRepository  extends BaseRepository{

    public function __construct(Category $category)
    {
        parent::__construct($category);
    }
 }