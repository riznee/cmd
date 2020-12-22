<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositries\TaxRepository;

class TaxController extends Controller
{
    public $perpage = 5;
    public $permissonName = 'tax';

    public $headers=array( 
        array('title'=>'Tax ', 'value'=>'tax'),
        array('title'=>'Tax percentage ', 'value'=>'tax_perce'),     
        array ( 'title'=>'Created At', 'value' =>'created_at'),
        array ( 'title'=>'Updated At', 'value' =>'updated_at'),
    );

    public function __construct(TaxRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }
    
    public function index()
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $tax = $this->repository->getall();
        $action = true;
        $data = array('data'=> "not null");
        return view('tax.index', compact('headers','tax','permisson','action','data'));
    }
    
    public function store()
    {
       
    }
    
    public function show($id)
    {
        $title="Tax Detail";
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $action = true;
        $tax = $this->repository->findOrFail($id);
        return view('tax.show', compact('headers','tax','permisson','action', 'title'));
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
