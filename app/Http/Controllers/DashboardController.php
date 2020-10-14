<?php

namespace App\Http\Controllers;


class DasehBoardController extends Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        return view('admin.index');
    }
    
    public function show()
    {
        return view('admin.index');
    }


    
}
