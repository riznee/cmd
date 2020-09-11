<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

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
  
    // protected $dates = ['published_at'];
    
    public function category()
    {
       
        return $this->belongsTo(Carbon::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
    
  
    // public function getLinkAttribute()
    // {
    //     return route('article', ['articleSlug' => $this->slug]);
    // }
}