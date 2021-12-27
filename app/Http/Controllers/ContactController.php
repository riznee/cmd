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
        array('title'=>'Slug', 'value'=>'slug'),
        array ( 'title'=>'Title', 'value' =>'title'),
        array ( 'title'=>'Published', 'value' =>'visible', 'type' =>'boolen'),
        array ( 'title'=>'Created At', 'value' =>'created_at'),
        array ( 'title'=>'Updated At', 'value' =>'updated_at')
        
    );

    public $slotfeild = array( 
        'value'=> 'visible', );


    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();


    }

    public function index()
    {
        $pages = $this->repository->getPages();
        return view('contacts.index', compact('pages'));
    }
    
    
    
    public function store(StoreContactRequest $request)
    {
       
        try{
            $data = $this->repository->store($request);
            return redirect()->route('contacts.index')->with('success', $data->title.'New Page is created');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('home.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }
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
    
    public function destroy($id)
    {
        try{
            $this->repository->destroy($id);
            return redirect()->route('contacts.index')->with('success','A Page is deleted');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('contacts.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }
    

    
}
