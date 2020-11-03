<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\PageCreated;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
   use SoftDeletes;
 
    protected $fillable = [
        'slug',
        'parent_id',
        'depth', 
        'title',
        'visible',
        'icon',
        'description'
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