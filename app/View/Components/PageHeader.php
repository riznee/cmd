<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    

    public $title  =null;
    public $action = false;
    public $permissionname = null;    
    public $id = null;    


    public function __construct($title,$permissionname,$action = false, $id)
    {
        $this->title= $title;
        $this->permissionname = $permissionname;
        $this->action = $action;
        $this->id = $id;
    }
       

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.pageHeader');
    }
}
