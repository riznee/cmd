<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositries\SettingRepository;

class SettingController extends Controller
{
    
    public $perpage = 5;
    public $permissonName = 'settings';


    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }
    
    public function index()
    {
        $setting = $this->repository->getItem(1);
        return view('settings.index', compact('setting'));
    }
    
    public function store()
    {
        return view('error.index');
    }
    
    public function show()
    {
        return view('error.index');
    }
    
    public function edit()
    {
        return view('error.index');
    }
    
    public function update()
    {
        return view('error.index');
    }
    
    public function destroy()
    {
        return view('error.index');
    }
    
    protected function getSelectList()
    {
        return view('error.index');
    }
}
