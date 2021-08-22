<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $value;
    public $type;
    public $icon;
    public $label;
    public $must;
    public $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value = '', $type = 'text', $icon = 'pen', $label = null, $must = false)
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->icon = $icon;
        $this->label = $label;
        $this->must = $must;
        $this->placeholder = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.inputs.input');
    }
}
