<?php

namespace App\Http\Requests;

class PostRequest extends Request
{

    public function rules()
    {
        return [
            'post'  => 'required',
            'parent_id'  => 'null|numaric',
            'status_id'  => 'required|numaric',
        ];
    } 
}