<?php

namespace App\Http\Controllers;


use App\Repositries\CategoryRepositry;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{

    public $perpage = 15;
    public $permissonName='categories';
    

    public function __construct(CategoryRepositry $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
    }

    public function index()
    {
        $categories = $this->repository->getall();
        return view('categories.index', compact('categories'))->with('i', (request()->input('page', 1) - 1) * $this->perpage);
    }
    
    public function create()
    {
        return view('categories.create');
    }
    
    public function store(StoreCategoryRequest $request)
    {
       
        try{
            $data = $this->repository->store($request);
            return redirect()->route('categories.index')->with('success', $data->title.'New category is created');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('categories.create')
                ->withError($exeption->getMessage())
                ->withInput();
        }
    }

    public function show($id)
    {
        $category =  $this->repository->getItem($id);      
        return view('categories.create',compact('category'));   
    }
    
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category =  $this->repository->findOrFail($id);
        try
        {
            $this->repository->updateUniquefeild($category,$request);
            return redirect()->route('categories.index')->with('success', 'category information is updated Successfull');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('categories.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }
    
    public function destroy($id)
    {
        try{
            $this->repository->destroy($id);
            return redirect()->route('category.index')->with('success','A category is deleted');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('category.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }
    
    // protected function validationCreate()
    // {
    //     return array ([
    //         'slug'      => 'required|max:255',
    //         'title'     => 'required|max:255',
    //         'description' => 'required|max:255',
    //         'color' => 'required|max:255',
    //         ]);

    // }
}
