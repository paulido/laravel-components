<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Navicon extends Component
{

    public $route;
    public $icon;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route = '#',  $icon = 'pen', $id='')
    {
        $this->route = $route;
        $this->icon = $icon;
        $this->id = $id;
        

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.navbars.navicon');
    }
}
