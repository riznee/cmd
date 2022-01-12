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
       
    }
    
    public function show()
    {
        
    }
    
    public function edit()
    {
        
    }
    
    public function update()
    {
       
    }
    
    public function destroy()
    {
       
    }
    
    protected function getSelectList()
    {
        
    }
}
