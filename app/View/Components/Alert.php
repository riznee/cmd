<?php

namespace App\View\Components;

// use Illuminate\Contracts\Session\Session as Session;
use Illuminate\View\Component;
use Session;
// 

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    

    // public $type;
    public $message= NULL;  
    public $color=NULL;
    public $checkValue = Null;


    public function __construct()
    {
        $this->messageType();
    }

    public function messageType()
    {
        // $this->checkValue = Session::get('sucess');
        // if($this->checkValue =='success')
        // {
        //     $this->message = $this->checkValue;
        //     $this->color   = 'primary';
        // }
        // else
        // {
        //     $this->message = $this->checkValue;
        //     $this->color   = 'danger';
        // }
      
       

    }
       

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
