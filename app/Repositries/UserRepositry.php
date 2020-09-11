<?php
 
 namespace App\Repositries;

 use App\Models\User;

 class UserRepositry extends BaseRepositry {

    public function __construct(User $user)
    {
        parent::__construct($user);
    }
 }