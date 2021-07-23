<?php

namespace Paulido\Components\Classes\navbars;

use Illuminate\View\Component;

class navbar extends Component
{
    
    public $toggle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($toggle = true)
    {
        $this->toggle = $toggle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui.navbars.navbar');
    }
}
