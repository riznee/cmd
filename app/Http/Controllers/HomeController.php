<?php

namespace App\Http\Controllers;



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
        $this->categoryRepositry =$categoryRepositry;
        $this->pageRepositry = $pageRepositry;
        $this->contactRepository = $contactRepository;
        parent::__construct();
    }

    public function index()
    {
        $pages = $this->pageRepositry->homeMenuPages();
        $article = $this->articleRepository->latesArtile();
       
        return view('home.index', compact('article','pages'));   
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
        if($page->visible == true) {
            $articles = $this->articleRepository->getPageArtiles($page->id);
            return view('home.slug', compact('page', 'articles','pages'));
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

}
