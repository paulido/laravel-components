<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Accordion extends Component
{

    public $text;
    public $text2;
    public $text3;
    public $text4;
    public $parent;
    public $collapse;
    public $header;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($parent = 'accordion1', $header, $collapse, $text = '', $text2 = '', $text3 = '', $text4 = '')
    {
        $this->text = $text;
        $this->text2 = $text2;
        $this->text3 = $text3;
        $this->text4 = $text4;
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
        return view('ui::components.accordions.card-accordion');
    }
}
