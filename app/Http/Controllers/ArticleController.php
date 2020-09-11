<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;

use App\Repositries\ArticleRepositry;
use App\Repositries\CategoryRepositry;
use App\Repositries\PageRepositry;

use Illuminate\Http\Request;
use Validator;


class ArticleController extends Controller
{
    protected $model = Article::class;
    public $perpage = 15;


    public $colums = [ 
        'title',
        'Article' => 'title',
        'published_at', 
        'created_at', 
        'updated_at'
    ];

    public function __construct(ArticleRepositry $repository, PageRepositry $pageRepositry, CategoryRepositry $categoryRepositry)
    {
        $this->repository = $repository;
        $this->pageRepositry = $pageRepositry;
        $this->categoryRepositry = $categoryRepositry;
    }

    public function index()
    {
        $articles = $this->repository->getall();
        return view('article.index',compact('articles'))->with('i', (request()->input('page', 1) - 1) * $this->perpage);
    }
    public function create()
    {
        $categories = $this->categoryRepositry->getall();
        $pages = $this->pageRepositry->getall();
        return view('article.create',compact('pages','categories'));
    }
    
    public function store(Request $request)
    {
        
        $this->validate( $request, $this->validationCreate());  
        Article::create($request->all());
        return redirect()->route('articles.index')->with('Successful', 'Page is created');        
    }
    
    public function show($id)
    {
        $article = Article::find($id);
        $pages = Page::all();
        $categories = Category::all();
        return view('article.edit',compact('article','pages','categories')); 
    }
    
    
    public function update(Request $request, $id)
    {
        $this->validate($request,$this->validationCreate());
        Article::find($id)->update($request->all());
        return redirect()->route('articles.index')->with('Successful', 'Updated Successfull'); 
    }
    
    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect()->route('articles.index')->with('Successful','Deleted Successfull');
    }
    
    protected function validationCreate()
    {
        return array ([
            'slug'    => 'required|max:255',
            'title'   => 'required|max:255',
            'page_id' => 'required|numeric', 
            'published_at'=> 'nullable|numeric', 
            'description' => 'required|max255',    
            'content'     => 'required|min:3|max:10000', 
            'category_id' => 'required|numeric',
        ]);
    }    
}
