<?php

namespace App\Http\Controllers;

use App\Repositries\ContactRepositry;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\Contact\UpdateContactRequest;

class ContactController extends Controller
{
    public $perpage = 5;
    public $permissonName='contact';

    public function __construct(ContactRepositry $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
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
