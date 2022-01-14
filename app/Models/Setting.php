<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Setting extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'logo',
        'site_name',
        'disqus_shortname',
        'email',
        'facebook',
        'twitter',
        'display_login_buttion',
        'display_title_site',
        'display_article_descirption',

        ];
}
