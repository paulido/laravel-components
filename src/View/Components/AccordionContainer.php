<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class AccordionContainer extends Component
{

    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = 'accordion1')
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.accordions.container');
    }
}
