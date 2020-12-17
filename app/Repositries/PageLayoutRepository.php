<?php
 
 namespace App\Repositries;
 
use App\Models\PageLayout;

 use App\Repositries\BaseRepository;

class PageLayoutRepository extends BaseRepository {


    public function __construct(PageLayout $pageLayout)
    {
        parent::__construct($pageLayout);
    }

    
 }
