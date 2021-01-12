<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositries\SettingRepository;

class SettingController extends Controller
{
    
    public $perpage = 5;
    public $permissonName = 'settings';

    public $headers=array( 
        array('title'=>'Logo ', 'value'=>'logo'),
        array('title'=>'Email', 'value'=>'email'),     
        array('title'=>'Facebook', 'value'=>'facebook'),     
        array('title'=>'Twitter', 'value'=>'twitter'),     
        array('title'=>'Display Short Name', 'value'=>'disqus_shortname'),     
        array('title'=>'Email', 'value'=>'email'),     
        array ('title'=>'Created At', 'value' =>'created_at'),
        array ('title'=>'Updated At', 'value' =>'updated_at'),


    );

    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }
    
    public function index()
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $settings = $this->repository->getall();
        $action = true;
        $data = array('data'=> "not null");
        $title = "Settings";
        return view('settings.index', compact('headers','settings','permisson','action','title'));
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
