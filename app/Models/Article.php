<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\Page;

class Article extends Model
{
   
    protected $fillable = [
        'category_id',
        'page_id', 
        'content', 
        'description', 
        'published_at', 
        'title',
        'slug'
    ];
  
   
    public function category()
    {
       
        return $this->belongsTo(Category::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
    
}