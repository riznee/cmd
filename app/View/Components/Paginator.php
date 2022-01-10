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
    public $totalItems;
    



    public function __construct($items)
    {
        $this->items = $items;
        $this->lastPage =$items->lastPage();
        $this->currentPage = $items->currentPage();
        

    }

    public function pageNumberGenerator()
    {
        if( $this->lastPage >= 0 && $this->currentPage < 2 ){
            $this->j=1;
        } else {
            $this->j=$this->items->currentPage()-5 ;
            $this->lastPage = $this->items->currentPage()+5;
        }

       
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
