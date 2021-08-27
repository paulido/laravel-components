<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class BtnLink extends Component
{
    public $text;
    public $icon;
    public $route;
    public $outline;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = 'Danger', $icon = null, $route = '#', $outline = false)
    {
        $this->text = $text;
        $this->icon = $icon;
        $this->route = $route;
        $this->outline = $outline;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // return view('<button type="button" class="btn btn-block btn-danger">Danger</button>');
       return view('ui::components.buttons.danger-link');

    //     return <<<'blade'
    //       <button type="button" class="btn btn-block btn-danger">Danger</button>
    //    blade;
    }
}
