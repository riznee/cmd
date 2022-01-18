<?php

namespace App\View\Components;

use Illuminate\View\Component;

use Auth;

class AdminNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    
    public $user= NULL;


    public function __construct()
    {
       $this->user = $this->checkuser();
    }
       
    public function checkuser()
    {
        if(Auth::check())
        {
          $user  = Auth::user();
        } 
        return $user;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.adminNav');
    }
}
