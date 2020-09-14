<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\Page;

class Article extends Model
{
   
    protected $fillable = [
        'id',
        'firstname', 
        'lastname', 
        'email', 
        'country', 
        'content',
    ];
  
    
}