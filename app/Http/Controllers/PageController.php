<?php

namespace App\Http\Controllers;

use App\Models\Page;
// use App\Http\Requests\PageRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class PageController extends Controller
{
    public $perpage = 5;

    public function index()
    {
        $pages = Page::latest()->paginate($this->perpage);
        // $paginator = new Paginator($pages->items(), $this->perpage, $pages->currentPage());
        return view('pages.index', compact('pages'))->with('i', (request()->input('page', 1) - 1) * $this->perpage);
    }
    
    public function create()
    {
        $pages = Page::all();
        return view('pages.create', compact('pages'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request,$this->validationCreate());
        Page::create($request->all());
        return redirect()->route('pages.index')->with('Successful', 'Page is created');
    }

    public function show($id)
    {
        $page = Page::find($id);
        $pages = Page::all();
        return view('pages.edit',compact('page', 'pages'));   
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request,$this->validationCreate());
        Page::find($id)->update($request->all());
        return redirect()->route('pages.index')->with('Successful', 'Updated Successfull');

    }
    
    public function destroy($id)
    {
        Page::find($id)->delete();
        return redirect()->route('pages.index')->with('success','Deleted');

    }
    
    protected function validationCreate()
    {
        return array ([

            'slug'      => 'required|unique:posts|max:255',
            'parent_id' => 'nullable|numeric',
            'depth'     => 'nullable|numeric',
            'title'     => 'required|max:255',
            'description' => 'required|max255',
            
            ]);

    }

    
}
