<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attributes extends Model
{
   use SoftDeletes;

    protected $fillable = [
        'parent_id',
        'type',
        'size',
        'visible',
    ];
  
   
    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }

    public function parent() {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Page::class, 'parent_id');
    }

    
}
