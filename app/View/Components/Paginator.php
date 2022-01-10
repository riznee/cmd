<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Paginator extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    
    public $items;
    public $j;
    public $lastPage;
    public $currentPage;



    public function __construct($items)
    {
        $this->items = $items;
        $this->pageNumberGenerator();

    }

    public function pageNumberGenerator()
    {
       
        // $this->lastPage = $this->items->lastPage;
        // $this->currentPage = $this->items->currentPage;
        // $this->perPage = $this->items->perPage;

        // if($this->items->lastPage() >= 1 && $this->items->currentPage() <=2 ){
        //     $this->j=1;
        //     $this->lastPage = $this->pages->lastPage();
        // } else {
        //     $this->j=$this->items->currentPage()-5 ;
        //     $this->lastPage = $this->items->currentPage()+5;
        // }
    }
       

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.paginator');
    }
}
