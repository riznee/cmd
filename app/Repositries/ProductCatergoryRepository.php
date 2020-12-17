<?php
 
namespace App\Repositries;
 
use App\Models\ProductCategory;

use App\Repositries\BaseRepository;

class ProductCatergoryRepository extends BaseRepository {


    public function __construct(ProductCategory $productcategory)
    {
        parent::__construct($productcategory);
    }

    
 }
