<?php

namespace App\Http\Requests;

class StatusRequest extends Request
{

    public function rules()
    {
        return [
            'date'      => 'required',
            'status'    => 'required|max:50'
        ];
    } 
}