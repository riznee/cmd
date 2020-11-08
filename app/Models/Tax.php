<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;




class Tax extends Model
{
   use SoftDeletes;

    protected $fillable = [
        'tax',
        'tax_perce',
        'visible'
    ];
  

    public function product()
    {
        return $this->hasMany(Product::class);
    }
   
    
}