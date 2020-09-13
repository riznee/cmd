<?php

namespace App\Http\Controllers;

use App\Repositries\PageRepositry;
use App\Http\Requests\Page\StorePageRequest;
use App\Http\Requests\Page\UpdatePageRequest;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public $perpage = 5;

    public function __construct(PageRepositry $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $pages = $this->repository->getall();
        return view('pages.index', compact('pages'))->with('i', (request()->input('page', 1) - 1) * $this->perpage);
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
            return redirect()->route('pages.index')->with('success', $data->title.' Page is created');
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
            return redirect()->route('pages.index')->with('success', 'Updated Successfull');
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
            return redirect()->route('pages.index')->with('success','Deleted');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('pages.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }
    

    
}
