<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class AccordionCard2 extends Component
{

    public $text;
    public $parent;
    public $collapse;
    public $header;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($parent = 'accordion1', $header, $collapse, $text = '')
    {
        $this->text = $text;
        $this->parent = $parent;
        $this->header = $header;
        $this->collapse = $collapse;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.accordions.card-accordion2');
    }
}
