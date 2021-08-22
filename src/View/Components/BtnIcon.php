<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class BtnIcon extends Component
{
    public $color;
    public $icon;
    public $d;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = '', $icon = 'image', $d = null)
    {
        $this->color = $color;
        $this->icon = $icon;
        $this->d = $d;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // return view('<button type="button" class="btn btn-block btn-Success">Success</button>');
       return view('ui::components.buttons.icon');

    //     return <<<'blade'
    //       <button type="button" class="btn btn-block btn-Success">Success</button>
    //    blade;
    }
}
