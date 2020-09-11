<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    private $auth;

    public function checkedAuthorization()
    {
        return $this->auth;
    }

   

}