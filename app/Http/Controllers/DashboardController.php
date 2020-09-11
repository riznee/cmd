<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class DasehBoardController extends Controller
{
    
    public function index()
    {
        return view('admin.index');
    }
    
    public function show()
    {
        return view('admin.index');
    }


    
}
