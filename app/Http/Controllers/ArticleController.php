<?php

namespace App\Http\Controllers;

use App\Repositries\ArticleRepositry;
use App\Repositries\CategoryRepositry;
use App\Repositries\PageRepositry;

use App\Http\Requests\Article\StoreArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;

class ArticleController extends Controller
{
    public $perpage = 15;

    public function __construct(ArticleRepositry $repository, CategoryRepositry $categoryRepositry, PageRepositry $pageRepositry )
    {
        $this->repository = $repository;
        $this->categoryRepositry =$categoryRepositry;
        $this->pageRepositry = $pageRepositry;
    }

    public function index()
    {
        $articles = $this->repository->getArticles();
        return view('articles.index', compact('articles'));
    }
    
    public function create()
    {
        $pages = $this->pageRepositry->pageList();
        $categories = $this->categoryRepositry->getall();
        return view('articles.create', compact('pages', 'categories'));
    }
    
    public function store(StoreArticleRequest $request)
    {
       
        try{
            $data = $this->repository->store($request);
            return redirect()->route('articles.index')->with('success', $data->title.'New Page is created');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('articles.create')
                ->withError($exeption->getMessage())
                ->withInput();
        }
    }

    public function show($id)
    {
        $page =  $this->repository->getItem($id);
        $pages = $this->repository->pageList();
        return view('articles.create',compact('page', 'pages'));   
    }
    
    public function update(UpdateArticleRequest $request, $id)
    {
        $page =  $this->repository->findOrFail($id);
        try
        {
            $this->repository->updateUniquefeild($page,$request);
            return redirect()->route('articles.index')->with('success', 'Page information is updated Successfull');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('articles.create')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }
    
    public function destroy($id)
    {
        try{
            $this->repository->destroy($id);
            return redirect()->route('articles.index')->with('success','A Page is deleted');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('articles.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }

    }


    // public $colums = [ 
    //     'title',
    //     'Article' => 'title',
    //     'published_at', 
    //     'created_at', 
    //     'updated_at'
    // ];

    // public function __construct(ArticleRepositry $repository, PageRepositry $pageRepositry, CategoryRepositry $categoryRepositry)
    // {
    //     $this->repository = $repository;
    //     $this->pageRepositry = $pageRepositry;
    //     $this->categoryRepositry = $categoryRepositry;
    // }

    // public function index()
    // {
    //     $articles = $this->repository->getall();
    //     return view('article.index',compact('articles'))->with('i', (request()->input('page', 1) - 1) * $this->perpage);
    // }
    // public function create()
    // {
    //     $categories = $this->categoryRepositry->getall();
    //     $pages = $this->pageRepositry->getall();
    //     return view('article.create',compact('pages','categories'));
    // }
    
    // public function store(Request $request)
    // {
        
    //     $this->validate( $request, $this->validationCreate());  
    //     Article::create($request->all());
    //     return redirect()->route('articles.index')->with('Successful', 'Page is created');        
    // }
    
    // public function show($id)
    // {
    //     $article = Article::find($id);
    //     $pages = Page::all();
    //     $categories = Category::all();
    //     return view('article.edit',compact('article','pages','categories')); 
    // }
    
    
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request,$this->validationCreate());
    //     Article::find($id)->update($request->all());
    //     return redirect()->route('articles.index')->with('Successful', 'Updated Successfull'); 
    // }
    
    // public function destroy($id)
    // {
    //     Article::find($id)->delete();
    //     return redirect()->route('articles.index')->with('Successful','Deleted Successfull');
    // }
    
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
