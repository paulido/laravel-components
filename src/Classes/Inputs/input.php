<?php

namespace Paulido\Components\Classes\Input;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $value;
    public $type;
    public $icon;
    public $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value = '', $type, $icon, $placeholder = '')
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->icon = $icon;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
