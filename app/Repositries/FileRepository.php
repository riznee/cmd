<?php

namespace App\Repositries;

 use App\Models\File;
 use App\Repositries\BaseRepository;



class FileRepository extends BaseRepository {

    // use SoftDeletes;

    public function __construct(File $file)
    {
        parent::__construct($file);
    }

   

    
 
    
 }
