<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Album extends Model
{
   use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'cover_image'
    ];

    public function Photos(){

        return $this->has_many(Image::class);
    }
  
   


    
    
}