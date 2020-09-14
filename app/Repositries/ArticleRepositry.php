<?php
 
 namespace App\Repositries;
 
 use App\Models\Article;

 use App\Repositries\BaseRepositry;


 class ArticleRepositry extends BaseRepositry {


    public function __construct(Article $article)
    {
        parent::__construct($article);
    }

    public function getArticles()
    {
        $articles = $this->model->with('page')
        ->with('category')
        ->orderBy('id','desc')->paginate();
        return $articles;
    }

    public function latesArtile()
    {
        $latest =$this->model->latest()
        ->where('published_at', '=','1')
        ->with('page')
        ->with('category')
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
        ->get();
        return $articles;
    }

    
 
    
 }
