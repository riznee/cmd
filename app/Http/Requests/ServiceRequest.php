<?php

namespace App\Http\Requests;

class ServiceRequest extends Request
{

    public function rules()
    {
        return [
            'service_name'  => 'required|max:200',
        ];
    } 
}