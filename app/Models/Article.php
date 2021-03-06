<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Page;

class Article extends Model
{
   use SoftDeletes;

    protected $fillable = [
        'page_id', 
        'content', 
        'description', 
        'published_at', 
        'title',
        'slug'
    ];
  
   


    public function page()
    {
        return $this->belongsTo(Page::class);
    }
    
}