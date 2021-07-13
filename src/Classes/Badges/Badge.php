<?php

namespace Paulido\Components\Classes\Badges;

use Illuminate\View\Component;

class Badge extends Component
{
   
    public $texte;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $texte)
    {
        $this->type = $type;
        $this->texte = $texte;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'

        <span class="badge bg-{{$type}}">{{$texte}}</span>
blade;
    }
}
