<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositries\ProductCatergoryRepository;

class ProductCatergoryController extends Controller
{
    public $perpage = 5;
    public $permissonName = 'pagelayouts';

    public $headers=array( 
        array('title'=>'Type ', 'value'=>'type'),
        array('title'=>'Name ', 'value'=>'name'),     
        array ( 'title'=>'Created At', 'value' =>'created_at'),
        array ( 'title'=>'Updated At', 'value' =>'updated_at'),
    );

    public function __construct(ProductCatergoryRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }
    
    public function index()
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $prodctcatergory = $this->repository->getall();
        $action = true;
        $data = array('data'=> "not null");
        return view('pagelayouts.index', compact('headers','prodctcatergory','permisson','action','data'));
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
