<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BaseForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    

    public $type;
    public $message;    


    public function __construct()
    {
        
    }
       

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.baseForm');
    }
}
