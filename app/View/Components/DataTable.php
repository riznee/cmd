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
    

    public $headers;
    public $data;    
    public $feilds;    


    public function __construct($headers, $data, $feilds)
    {
        $this->headers = $headers;
        $this->data = $data; 
        $this->feilds = $feilds;
    }
       

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dataTable');
    }
}
