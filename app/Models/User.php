<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasApiTokens, HasRoles;

  
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
 
  
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
