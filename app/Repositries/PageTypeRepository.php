<?php
 
 namespace App\Repositries;
 
use App\Models\PageType;

 use App\Repositries\BaseRepository;

class PageTypeRepository extends BaseRepository {


    public function __construct(PageType $pagetype)
    {
        parent::__construct($pagetype);
    }

    
 }
