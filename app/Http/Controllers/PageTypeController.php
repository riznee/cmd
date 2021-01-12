<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositries\PageTypeRepository;

class PageTypeController extends Controller
{
    public $perpage = 5;
    public $permissonName = 'pagetypes';

    public $headers=array( 
        array('title'=>'Title ', 'value'=>'title'),
        array('title'=>'Description ', 'value'=>'description'),     
        array ( 'title'=>'Created At', 'value' =>'created_at'),
        array ( 'title'=>'Updated At', 'value' =>'updated_at'),
    );

    public function __construct(PageTypeRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }
    
    public function index()
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $pagetypelist = $this->repository->getall();
        $action = true;
        $data = array('data'=> "not null");
        return view('pagetypes.index', compact('headers','pagetypelist','permisson','action','data'));
    }
    
    public function store()
    {
       
    }
    
    public function show($id)
    {
        $title="Page Layout Details";
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $action = true;
        $data = $this->repository->findOrFail($id);
        return view('pagetypes.show', compact('headers','data','permisson','action', 'title'));
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
