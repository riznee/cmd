<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    
    public $headers =null;
    public $items = null;
    public $permissionname = null;
    public $option = null;



    public function __construct($headers,$items, $permissionname, $option = null)
    {
        $this->headers = $headers;
        $this->items = $items;
        $this->permissionname = $permissionname;
        $this->option = $option;
    }
       

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
