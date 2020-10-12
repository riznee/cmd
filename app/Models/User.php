<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\VerifyUser;



class User extends Authenticatable
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

    public function verifyUser()
    {
        return $this->hasOne(VerifyUser::class);
    }
}
