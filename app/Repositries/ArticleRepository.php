<?php
 
 namespace App\Repositries;
 
 use App\Models\Article;

 use App\Repositries\BaseRepository;
use PhpParser\Node\Expr\FuncCall;

class ArticleRepository extends BaseRepository {


    public function __construct(Article $article)
    {
        parent::__construct($article);
    }

    public function getArticles()
    {
        $articles = $this->model->with('page')
        ->orderBy('id','desc')->paginate();
        return $articles;
    }

    public function latesArtile()
    {
        $latest =$this->model->latest()
        ->where('published_at', '=','1')
        ->with('page')
        ->first();
        return $latest;
    }

    public function published($id)
    {
        $article=$this->model->findOrFail($id);
        $article->update(array(
            'published_at' => 1
        ));
        return $article;
    }

    public function unPublish($id)
    {
        $article=$this->model->findOrFail($id);
        $article->update(array(
            'published_at' => 0
        ));
        return $article;
    }

    public function getPageArtiles($page_id)
    {
        $articles = $this->model
        ->where('page_id', $page_id)
        ->where('published_at', '=','1')
        ->paginate(1);
        return $articles;
    }

    public function listPageArticles($page_id)
    {
        $result = $this->model
        ->where('page_id', $page_id)
        ->where('published_at', '=','1')
        ->get();
        return $result;
    }

    public function articleBySlug($slug)
    {
        $result = $this->model
        ->with('page')
        ->where('slug','=',$slug)
        ->where('published_at', '=','1')
        ->paginate();        
        return $result;
    }

    public function homePage()
    {
        $result =$this->model->latest()
        ->where('published_at', '=','1')
        ->where('slug','=','home')
        ->first();   
        return $result;
    }

    
 
    
 }
