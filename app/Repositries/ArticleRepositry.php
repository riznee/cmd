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
        $latest =$this->model->latest()->where('published_at', '=','1')->first();
        return $latest;
    }

    
 
    
 }
