<?php

namespace App\Http\Controllers;

use App\Repositries\PageRepositry;
use App\Http\Requests\Page\StorePageRequest;
use App\Http\Requests\Page\UpdatePageRequest;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    public $perpage = 5;
    public $permissonName='pages';

    public function __construct(PageRepositry $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }

    public function index()
    {
        $pages = $this->repository->getPages();
        return view('pages.index', compact('pages'));
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
            return redirect()->route('pages.index')->with('success', $data->title.'New Page is created');
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
        $page =  $this->repository->getItem($id);
        $pages = $this->repository->pageList();
        return view('pages.create',compact('page', 'pages'));   
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
