<?php

namespace App\View\Paulido\Ui\Sweets;

use Illuminate\View\Component;

class Suscess extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui.sweets.suscess');
    }
}
