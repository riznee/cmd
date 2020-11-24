<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Repositries\PageRepository;
use cache;
class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    

    public $pages = Null;    


    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->pages = $this->getHomePageMenu(); 
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
