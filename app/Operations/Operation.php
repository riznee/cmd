<?php

namespace App\Operations;

 use App\Repositries\ArticleRepositry;
 use App\Repositries\CategoryRepositry;
 use App\Repositries\PageRepositry;
 use App\Repositries\SettingRepositry;
 use App\Repositries\UserRepositry;





class Operation
{
    public function __construct(ArticleRepositry $articleRepositry, CategoryRepositry $categoryRepositry, PageRepositry $pageRepositry)
    {
        $this->articleRepositry = $articleRepositry;
        $this->categoryRepositry = $categoryRepositry;
        $this->pageRepositry = $pageRepositry;
    }

    public function getPages()
    {
        $pages = $this->pageRepositry->getPages();
        return $pages;
    }

    public function getArticles()
    {
        $articles = $this->articleRepositry->getArticles();
        return $articles;
    }




}