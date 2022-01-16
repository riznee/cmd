<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $theme;

    protected $repository;


    public function __construct()
    {
        $this->setTheme();
    }

    public function setPermission($permission)
    {
        // $this->middleware('permission:'.$permission.'-all|'.$permission.'-list|'.$permission.'-create|'.$permission.'-edit|'.$permission.'-delete', ['only' => ['index','show']]);
        $this->middleware('permission:'.$permission.'-list|', ['only' => ['index','show']]);
        $this->middleware('permission:'.$permission.'-create', ['only' => ['create','store']]);
        $this->middleware('permission:'.$permission.'-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:'.$permission.'-destroy', ['only' => ['destroy']]);
    }

    public function setTheme()
    {
        $this->theme = 'dark';
    }


}
