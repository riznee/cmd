<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'color', 
        'description',
        'title',
        'slug'
    ];


    public function articles()
    {
        return $this->hasMany(Page::class);
    }
  
    public function paginatedArticles()
    {
        return $this->articles()->published()->orderBy('published_at', 'desc');
    }

    // public function getLinkAttribute()
    // {
    //     return route('category', ['categorySlug' => $this->slug]);
    // }
}