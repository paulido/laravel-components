<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Navitem extends Component
{

    public $text;
    public $route;
    public $icon;
    public $status;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = 'Link', $route = '#',  $icon = null, $status = '')
    {
        $this->text = $text;
        $this->route = $route;
        $this->icon = $icon;
        $this->status = $status;
        

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.navbars.navitem');
    }
}
