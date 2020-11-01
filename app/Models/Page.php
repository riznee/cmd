<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\PageCreated;

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
    
    protected $dispactchesEvents =[
        'created' => PageCreated ::class
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