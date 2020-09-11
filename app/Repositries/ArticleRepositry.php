<?php
 
 namespace App\Repositries;
 
 use App\Models\Article;

 use App\Repositries\BaseRepositry;
 use App\Validators\ArticleValidator;

 class ArticleRepositry extends BaseRepositry {


    public function __construct(Article $article ,ArticleValidator $validator)
    {
        parent::__construct($article, $validator);
    }

    public function getArticles()
    {
        $articles = $this->model->with('page')->orderBy('id','desc')->get();
        return $articles;
    }

    public function latesArtile()
    {
        $latest =$this->model->latest()->where('published_at', '=','1')->first();
        return $latest;
    }
 
    
 }
