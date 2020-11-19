<?php

namespace App\Http\Controllers;


use App\Repositries\CategoryRepository;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{

    public $perpage = 15;
    public $permissonName='categories';

    public $headers=array( 
        array('title'=>'Slug', 'value'=>'slug'),
        array ( 'title'=>'Title', 'value' =>'title'),
        // array ( 'title'=>'Description', 'value' =>'description'),
        array ( 'title'=>'Color', 'value' =>'color'),
        array ( 'title'=>'Created At', 'value' =>'created_at'),
        array ( 'title'=>'Updated At', 'value' =>'updated_at')
    );
    

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }

    public function index()
    {

        $headers = $this->headers;
        $permisson = $this->permissonName;
        $categories = $this->repository->getall();
        $action = true;
        return view('categories.index', compact('headers','categories','permisson','action'));
    }
    
    public function create()
    {
        return view('categories.create');
    }
    
    public function store(StoreCategoryRequest $request)
    {
       
        try{
            $data = $this->repository->store($request);
            return redirect()->route('categories.index')->with( $data->title.'New category is created');
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
