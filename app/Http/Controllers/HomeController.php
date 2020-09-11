<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Operations\Operation;


class HomeController extends Controller
{
    public $perpage = 15;

    public function __construct(Operation $operation)
    {
        $this->operation = $operation;
    }

    public function index()
    {
        $pages = $this->operation->getPages();
        $articles = $this->operation->getArticles();     
        return view('home.index' ,compact ('pages', 'articles'));
    }

    public function page($slug)
    {
            dd($slug);
    }
    
    // public function slugRoutes($slug)
    // {
    //       $page = $this->pages($slug);
    //       if(!is_null($page))
    //       {
    //         return $this->loadPage($page);
    //       }
    // }

    // private function pages($slug)
    // {
    //     $page = Page::where('slug','=', $slug)->get();
    //     return $page;
    // }

    // public function article($id)
    // {
    //     $pages = Page::with('children')->whereNull('parent_id')->orderBy('depth', 'asc')->get();
    //     $latest =Article::find($id);   
    //     return view('home.article' ,compact('pages', 'latest'));
    // }

    // private function loadPage($data)
    // {
    //     $pages = Page::with('children')->whereNull('parent_id')->orderBy('depth', 'asc')->get();
    //     $articles = Article::where([
    //         ['page_id', '=', $data[0]['id']],
    //         ['published_at', '=','1']
    //     ])->orderBy('id','desc')->get();
    //     $latest =Article::latest()->where([
    //         ['page_id', '=', $data[0]['id']],
    //         ['published_at', '=','1']
    //     ])->first();    
    //     // dd( $pages, $articles,  $latest);    
    //     return view('home.index' ,compact('pages', 'articles', 'latest'));
    // }

    public function about(){

    }

    public function contact(){
        
    }

    public function services(){
        
    }

    public function portfolio(){
        
    }

    

}
