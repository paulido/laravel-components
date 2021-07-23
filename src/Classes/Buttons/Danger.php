<?php

namespace Paulido\Ui\Classes\Buttons;

use Illuminate\View\Component;

class Danger extends Component
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
        // return view('<button type="button" class="btn btn-block btn-danger">Danger</button>');

       return view('components::buttons.danger');

    //     return <<<'blade'
    //       <button type="button" class="btn btn-block btn-danger">Danger</button>
    //    blade;
    }
}
