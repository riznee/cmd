<?php

namespace App\Http\Controllers;

use cache;

use App\Repositries\ArticleRepository;

use App\Repositries\PageRepository;
use App\Repositries\ContactRepository;




class HomeController extends Controller
{
    public $perpage = 15;

    public function __construct(ArticleRepository $articleRepository, 

                                PageRepository $pageRepository, 
                                ContactRepository $contactRepository
                                )
    {
        $this->articleRepository = $articleRepository;

        $this->pageRepository = $pageRepository;
        $this->contactRepository = $contactRepository;
        parent::__construct();
    }

    public function index()
    {   
        $article = $this->articleRepository->homePage();       
        return view('home.index', compact('article'));   
    }
    
    public function homePagePages()
    {
        $pages = $this->pageRepository->homeMenuPages();
        return $pages;
    }

    public function page($slug)
    {
        $page = $this->pageRepository->slugPages($slug); 
        
        if($page->visible == true) {
            $grandParent = $this->getGrandParents($slug);
            $articles = $this->articleRepository->getPageArtiles($page->id);            
            $articleList = $this->articleRepository->listPageArticles($page->id);
            return view('home.slug', compact( 'articles','page','grandParent','articleList'));
        }
        else
        {
            return redirect()->route('home')->with('info', ' The page is comming Soon');
        }
    }

    public function artilcePage($slug)
    {
        $articles = $this->articleRepository->articleBySlug($slug);  
        $page = $this->pageRepository->slugPages($articles[0]->page->slug);             
        if($page->visible == true) {
            $grandParent = $this->getGrandParents($articles[0]->page->slug);           
            $articleList = $this->articleRepository->listPageArticles($articles[0]->page->id);
            return view('home.slug', compact('articles','page','grandParent','articleList'));
        }
        else
        {
            return redirect()->route('home')->with('info', ' The page is comming Soon');
        }
    }

    public function contactus()
    {
        return view('home.contactus');
    }


    public function contactSend($request)
    {
        try{
            $data = $this->contactRepository->store($request);
            
            return redirect()->route('home')->with('success', 'Contact Request is send');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('home')
                ->withError($exeption->getMessage())
                ->withInput();
        }
    }


    public function getHomePageMenu()
    {
        $pages = cache('homeMenuPages', function() {
            return $this->pageRepository->homeMenuPages();
        });
        return $pages;
    }

    public function getGrandParents($slug)
    {
        $gradParent = cache(''.$slug.'', function() use($slug){
            return $this->pageRepository->findGrandParents($slug);
        });
        return $gradParent;
    }


    

}
