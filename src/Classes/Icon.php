<?php

namespace Paulido\Ui\Icons;

use Illuminate\View\Component;

class Icon extends Component
{

    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
      <i class="fas fa-{{$name}}"></i>
blade;
    }
}
