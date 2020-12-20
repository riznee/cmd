<?php
 
namespace App\Repositries;
 
use App\Models\ProductCatergory;

use App\Repositries\BaseRepository;

class ProductCatergoryRepository extends BaseRepository {


    public function __construct(ProductCatergory $productcategory)
    {
        parent::__construct($productcategory);
    }

    
 }
