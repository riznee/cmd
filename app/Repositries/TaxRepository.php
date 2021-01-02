<?php
 
 namespace App\Repositries;

use App\Models\Tax;

 class TaxRepository extends BaseRepository {


    public function __construct(Tax $tax)
    {
        parent::__construct($tax);
    }
    
 }