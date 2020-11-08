<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageLayout extends Model {

    use SoftDeletes;

    protected $table ='page_layouts';

    protected $fillables=[
        'type',
        'name'
    ];

    public function page()
    {
        return $this->hasMany(Page::class);
    }
    
}