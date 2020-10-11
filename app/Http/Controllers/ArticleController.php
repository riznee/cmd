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
    public $permissonName='articles';

    

    public function __construct(ArticleRepositry $repository, CategoryRepositry $categoryRepositry, PageRepositry $pageRepositry )
    {
        $this->repository = $repository;
        $this->categoryRepositry =$categoryRepositry;
        $this->pageRepositry = $pageRepositry;
        $this->setPermission($this->permissonName);
        parent::__construct();

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
        $article =  $this->repository->getItem($id);
        $pages = $this->pageRepositry->pageList();
        $categories = $this->categoryRepositry->getall();
        return view('articles.create',compact('article', 'pages', 'categories'));   
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

    public function publish($id)
    {
        $this->repository->published($id);
        return redirect()->route('articles.index')->with('success','Ariticle is Published');
    }

    public function unPublish($id)
    {
        $this->repository->unPublish($id);
        return redirect()->route('articles.index')->with('success','Ariticle is Un-Published');
    }
}
