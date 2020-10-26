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
        'visible',
        'icon'
        ];
 

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

}