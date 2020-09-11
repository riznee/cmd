<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

  
    protected $fillable = [
        'email', 
        'name', 
        'password', 
        'picture'
    ];

    protected $hidden = ['
        password', 
        'remember_token'
    ];
  
    protected $dates = [
        'logged_in_at', 
        'logged_out_at'
    ];
 
    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = HasApiToken::make($password);
    // }
 
    // public function getPictureAttribute($picture)
    // {
    //     return !empty($picture) ? asset($picture) : 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png';
    // }
  
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
