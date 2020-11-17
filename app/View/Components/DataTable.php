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
    public $data = null;
    public $action = false;
    public $action_view = false;
    public $action_delete = false;
    public $permissionname = null;


    public function __construct($headers, $data, $permissionname)
    {
        $this->headers = $headers;
        $this->data = $data;
        $this->permissionname = $permissionname;


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
