<?php

namespace App\Http\Controllers;

use App\Repositries\ContactRepository;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\Contact\UpdateContactRequest;

class ContactController extends Controller
{
    public $perpage = 5;
    public $permissonName='contactus';


    public $headers=array( 
    
        array ( 'title'=>'Name', 'value' =>'name'),
        array ( 'title'=>'Email', 'value' =>'email'),
        array ( 'title'=>'Subject', 'value' =>'subject'),
        array ( 'title'=>'Read', 'value' =>'read'),
        array ( 'title'=>'Created At', 'value' =>'created_at'),
        array ( 'title'=>'Updated At', 'value' =>'updated_at')

    );

    public $slotfeild = array( 
        'value'=> 'read', );


    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();


    }

    public function index()
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $contacts = $this->repository->getall();
        $action = true;    
        return view('contactus.index', compact('headers','contacts','permisson','action'));
    }
    

    public function show($id)
    {
        $page =  $this->repository->getItem($id);
        $pages = $this->repository->pageList();
        return view('contacts.view',compact('page', 'pages'));   
    }
    
    public function update(UpdateContactRequest $request, $id)
    {
        $page =  $this->repository->findOrFail($id);
        try
        {
            $this->repository->updateUniquefeild($page,$request);
            return redirect()->route('contacts.index')->with('success', 'Page information is updated Successfull');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('contacts.create')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }
    
   
    

    
}
