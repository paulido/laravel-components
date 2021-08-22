<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class DropdownLink extends Component
{

    public $route;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route = '#', $text = 'Link')
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
        return view('ui::components.menus.dropdown-link');
    }
}
