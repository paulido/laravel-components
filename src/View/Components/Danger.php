<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Danger extends Component
{
    public $text;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = 'Danger', $icon = null)
    {
        $this->text = $text;
        $this->icon = $icon;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // return view('<button type="button" class="btn btn-block btn-danger">Danger</button>');
       return view('ui::components.buttons.danger');

    //     return <<<'blade'
    //       <button type="button" class="btn btn-block btn-danger">Danger</button>
    //    blade;
    }
}
