<?php

namespace App\Http\Controllers;

use cache;

use App\Repositries\ArticleRepositry;
use App\Repositries\CategoryRepositry;
use App\Repositries\PageRepositry;
use App\Repositries\ContactRepositry;
use App\Http\Requests\Contact\StoreContactRequest;



class HomeController extends Controller
{
    public $perpage = 15;

    public function __construct(ArticleRepositry $articleRepository, 
                                CategoryRepositry $categoryRepositry, 
                                PageRepositry $pageRepositry, 
                                ContactRepositry $contactRepository
                                )
    {
        $this->articleRepository = $articleRepository;
        $this->categoryRepository =$categoryRepositry;
        $this->pageRepository = $pageRepositry;
        $this->contactRepository = $contactRepository;
        parent::__construct();
    }

    public function index()
    {   
        $pages = $this->getHomePageMenu();
        $article = $this->articleRepository->latesArtile();       
        return view('home.index', compact('article','pages'));   
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
            $pages = $this->getHomePageMenu();
            $grandParent = $this->getGrandParents($slug);
            $articles = $this->articleRepository->getPageArtiles($page->id);
            return view('home.slug', compact('pages', 'articles','page', 'grandParent'));
        }
        else
        {
            return redirect()->route('home')->with('info', ' The page is comming Soon');
        }


    }

    public function contactSend(StoreContactRequest $request)
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
