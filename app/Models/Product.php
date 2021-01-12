<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;




class Product extends Model
{
   use SoftDeletes;

    protected $fillable = [
        'upc',
        'name', 
        'product_catergory_id', 
        'attrib_id', 
        'tax_type_id', 
        'price',
        'qty',
        'sold',
        'filename_url',
        'taxable',
        'visible'
    ];
  
   
    public function tax()
    {
        return $this->belongsTo(Tax::class , 'tax_type_id');
    }

    public function attribute()
    {
        return $this->belongsTo(Attributes::class.'attrib_id');
    }
    
}