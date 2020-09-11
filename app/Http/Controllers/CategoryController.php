<?php

namespace App\Http\Controllers;


use App\Models\Category;
// use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $perpage = 15;

    public function index()
    {
        $categories = Category::latest()->paginate($this->perpage);
        return view('categories.index', compact('categories'))->with('i', (request()->input('page', 1) - 1) * $this->perpage);
    }

    public function create()
    {
        // $pages = Category::all();
        return view('categories.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request,$this->validationCreate());
        Category::create($request->all());
        return redirect()->route('categories.index')->with('Successful', 'Page is created');
    }
    
    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.edit',compact('category')); 
    }
    
    
    public function update(Request $request, $id)
    {
        $this->validate($request,$this->validationCreate());
        Category::find($id)->update($request->all());
        return redirect()->route('categories.index')->with('Successful', 'Updated Successfull'); 
    }
    
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories.index')->with('success','Deleted Successfull');
    }
    
    protected function validationCreate()
    {
        return array ([
            'slug'      => 'required|unique:posts|max:255',
            'title'     => 'required|max:255',
            'description' => 'required|max255',
            'color' => 'required|max255',
            ]);

    }
}
