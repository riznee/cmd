<?php

namespace App\Http\Controllers;

use App\Repositries\ArticleRepository;
use App\Repositries\PageRepository;

use App\Http\Requests\Article\StoreArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;

class ArticleController extends Controller
{
    public $perpage = 15;
    public $permissonName='articles';

    public $headers=array( 
        array('title'=>'Slug', 'value'=>'slug'),
        array ( 'title'=>'Title', 'value' =>'title'),
        array ( 'title'=>'Description', 'value' =>'descriptions'),
        array ( 'title'=>'Published', 'value' =>'published_a', 'type' =>'boolen'),
        array ( 'title'=>'Created At', 'value' =>'created_at'),
        array ( 'title'=>'Updated At', 'value' =>'updated_at')
    );

    public $slotfeild = array( 
        'value'=> 'visible', );

    public function __construct(ArticleRepository $repository, PageRepository $pageRepositry )
    {
        $this->repository = $repository;
        $this->pageRepositry = $pageRepositry;
        $this->setPermission($this->permissonName);
        parent::__construct();

    }

    public function index()
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $articles = $this->repository->getArticles();
        $action = true;
        $data = array('true' => 'Published', 'false' => 'Unpublished');
        return view('articles.index', compact('headers','articles','permisson','action', 'data'));
    }
    
    public function create()
    {
        $pages = $this->pageRepositry->pageList();
        return view('articles.create', compact('pages'));
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
        return view('articles.create',compact('article', 'pages'));   
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
