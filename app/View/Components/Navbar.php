<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Repositries\PageRepository;
use cache;
use Auth;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    

    public $pages = Null;  
    public $user = Null;  



    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->pages = $this->getHomePageMenu(); 
        $this->checkuser();
        $this->user = $this->checkuser();
      
    }

    public function checkuser()
    {
        $user = Null;
        if(Auth::check())
        {
          $user  = Auth::user();
        } 
        return $user;
    }



    public function getHomePageMenu()
    {
        $pages = cache('homeMenuPages', function() {
            return $this->pageRepository->homeMenuPages();
        });       
        return $pages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
