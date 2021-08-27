<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Btn extends Component
{
    public $text;
    public $icon;
    public $type;
    public $outline;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = 'Button', $type = 'success', $icon = null, $outline = false)
    {
        $this->text = $text;
        $this->icon = $icon;
        $this->type = $type;
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
       return view('ui::components.buttons.btn');

    //     return <<<'blade'
    //       <button type="button" class="btn btn-block btn-danger">Danger</button>
    //    blade;
    }
}
