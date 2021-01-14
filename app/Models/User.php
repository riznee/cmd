<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\VerifyUser;
use App\Models\PasswordReset;


class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasRoles, SoftDeletes;

  
    protected $fillable = [
        'email', 
        'name', 
        'password', 
        'picture',
        'ip_address',
        'logged_in_at',
        'logged_out_at'

    ];

    protected $hidden = ['
        password', 
        'remember_token'
    ];
  
    protected $dates = [
        'logged_in_at', 
        'logged_out_at'
    ];
 
    public function verifyUser()
    {
        return $this->hasOne(VerifyUser::class);
    }

    public function passwordReset()
    {
        return $this->hasOne(PasswordReset::class, 'email' ,'email');
    }

   

}
