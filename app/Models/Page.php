<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
   
 
    protected $fillable = [
        'slug',
        'parent_id',
        'depth', 
        'title',
        'description',
        ];
 
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function parent() {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Page::class, 'parent_id')->orderBy('depth','asc');
    }

    // public function getLinkAttribute()
    // {
    //     return route('page', ['pageSlug' => $this->slug]);
    // }
}