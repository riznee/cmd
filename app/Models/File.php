<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


use App\Models\Category;
use App\Models\Page;

class File extends Model
{
   use SoftDeletes;

    protected $fillable = [
        'url',
        'filename',
        'visible',
        'page_id', 
    ];
  
   
    public function Page()
    {
       
        return $this->belongsTo(Page::class);
    }

    
}