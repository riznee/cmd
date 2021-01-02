<?php

namespace App\Http\Controllers;

use App\Repositries\PageRepository;
use App\Http\Requests\Page\StorePageRequest;
use App\Http\Requests\Page\UpdatePageRequest;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    public $perpage = 5;
    public $permissonName='pages';

    public $headers=array( 
        array('title'=>'Slug', 'value'=>'slug'),
        array ( 'title'=>'Title', 'value' =>'title'),
        array ( 'title'=>'Published', 'value' =>'visible', 'type' =>'boolen'),
        array ( 'title'=>'Created At', 'value' =>'created_at'),
        array ( 'title'=>'Updated At', 'value' =>'updated_at')
    );

    public $slotfeild = array( 
        'value'=> 'visible', );

  
    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();

       
    }

    public function index()
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $pages = $this->repository->getPages();
        $action = true;
        $data = array('true' => 'Published', 'false' => 'Unpublished');
    
        return view('pages.index', compact('headers','pages','permisson','action', 'data'));
    }

   
    
    public function create()
    {
        $pages = $this->repository->pageList();
        return view('pages.create', compact('pages'));
    }
    
    public function store(StorePageRequest $request)
    {
        try{
            $data = $this->repository->store($request);
            return redirect()->route('pages.index')->with('success','New Page is created');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('pages.create')
                ->withError($exeption->getMessage())
                ->withInput();
        }
    }

    public function show($id)
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $page =  $this->repository->getItem($id);
        $action = true;
        return view('pages.show',compact('headers','page','permisson','action'));   
    }
    
    public function update(UpdatePageRequest $request, $id)
    {
        $page =  $this->repository->findOrFail($id);
        try
        {
            $this->repository->updateUniquefeild($page,$request);
            return redirect()->route('pages.index')->with('success', 'Page information is updated Successfull');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('pages.create')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }
    
    public function destroy($id)
    {
        try{
            $this->repository->destroy($id);
            return redirect()->route('pages.index')->with('success','A Page is deleted');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('pages.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }
    
    public function enable($id)
    {
        $this->repository->enable($id);
        return redirect()->route('pages.index')->with('success','Enable is Papge to public');
    }

    public function disable($id)
    {
        $this->repository->disable($id);
        return redirect()->route('pages.index')->with('success','Disable is Page to public');
    }
    
}
