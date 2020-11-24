<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    

    public $headers =null;
    public $items = null;
    public $action = false;
    public $permissionname = null;
    public $slotFeilds =null;


    public function __construct($headers,$items, $permissionname, $action = false, $slotFeilds = null)
    {
        $this->headers = $headers;
        $this->items = $items;
        $this->permissionname = $permissionname;
        $this->action = $action;
        $this->slotFeilds = $slotFeilds;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.datatable');
    }
}
