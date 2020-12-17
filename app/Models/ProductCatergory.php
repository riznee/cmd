<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
   use SoftDeletes;

    // protected $

    protected $fillable = [
         
        'id', 
        'slug', 
        'parent_id', 
        'name' ,
        'icon' ,
        'visible', 
        
    ];
  
    public function parent() 
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Page::class, 'parent_id')->orderBy('depth','asc');
    }
   
    
}