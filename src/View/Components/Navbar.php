<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    
    public $icon;
    public $sidebar;
    public $brand;
    public $route;
    public $logo;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sidebar = false, $brand = false, $logo = null, $text = null, $route = 'home', $icon = 'bars')
    {
        $this->sidebar = $sidebar;
        $this->icon = $icon;
        $this->brand = $brand;
        $this->logo = $logo;
        $this->text = $text;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.navbars.navbar');
    }
}
