<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    

 
    
    public $items = null;
    public $action = false;
    public $permissionname = null;
  


    public function __construct($items, $permissionname, $action = false )
    {
       
        $this->items = $items;
        $this->permissionname = $permissionname;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cardList');
    }
}
