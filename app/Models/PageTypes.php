<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageType extends Model {

    use SoftDeletes;

    protected $table ='pagetypes';

    protected $fillable =[
        'title',
        'description'
    ];



}