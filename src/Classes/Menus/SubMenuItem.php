<?php

namespace Paulido\Ui\Classes\Menus;

use Illuminate\View\Component;

class SubMenuItem extends Component
{

    public $route;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route = null, $text = 'Link')
    {
        $this->route = $route;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui.menus.sub-menu-item');
    }
}
