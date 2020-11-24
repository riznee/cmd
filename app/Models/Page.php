<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\PageCreated;
use App\Events\PageUpDate;
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
        'description',
        'page_layout',
        'type_id',
        
    ];
    
    protected $dispactchesEvents =[
        'created' => PageCreated ::class,
        'update' =>PageUpDate::class
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

    public function page_layouts()
    {
        return $this->belongsTo(PageLayout::class,'page_layout');
    }

    public function type()
    {
        return $this->belongsTo(PageType::class, 'type_id');
    }

   

}