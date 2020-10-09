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
    }

    public function index()
    {
        $pages = $this->pageRepositry->homeMenuPages();
        $article = $this->articleRepository->latesArtile();          
        return view('home.index', compact('article','pages'));

        // $article = $this->articleRepository->latesArtile();         
        // return $article; 
   
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

    public function contactSend(StoreContactRequest $request)
    {
        try{
            $data = $this->repository->store($request);
            return redirect()->route('home.index')->with('success', $data->title.'Contact Request is send');
        }
        catch (\Exception $exeption)
        {
            return redirect()->route('home.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }
    }

}
