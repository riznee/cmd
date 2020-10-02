<?php

namespace App\Http\Controllers;



use App\Repositries\ArticleRepositry;
use App\Repositries\CategoryRepositry;
use App\Repositries\PageRepositry;



class HomeController extends Controller
{
    public $perpage = 15;

    public function __construct(ArticleRepositry $articleRepository, CategoryRepositry $categoryRepositry, PageRepositry $pageRepositry )
    {
        $this->articleRepository = $articleRepository;
        $this->categoryRepositry =$categoryRepositry;
        $this->pageRepositry = $pageRepositry;
    }

    public function index()
    {
        // $pages = $this->pageRepositry->homeMenuPages();
        // $article = $this->articleRepository->latesArtile();          
        // return view('home.index', compact('article','pages'));

        $article = $this->articleRepository->latesArtile();         
        return $article; 
   
    }
    
    public function homePagePages()
    {
        $pages = $this->pageRepositry->homeMenuPages();
        return $pages;

    }

    public function page($slug)
    {
        $pages = $this->pageRepositry->homeMenuPages();
        $page = $this->pageRepositry->slugPages($slug);
        $articles = $this->articleRepository->getPageArtiles($page->id);
        return view('home.slug', compact('page', 'articles','pages'));

    }

    public function contact()
    {
        $pages = $this->pageRepositry->homeMenuPages();
        return view('home.contact',compact ('pages'));
    }

}
