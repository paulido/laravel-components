<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input2 extends Component
{
    public $name;
    public $value;
    public $type;
    public $icon;
    public $label;
    public $must;
    public $placeholder;
    public $id;
    public $required;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value = '', $type = 'text', $icon = 'pen', $label = null, $must = false, $id = '', $placeholder = null, $required = "true")
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->icon = $icon;
        $this->label = $label;
        $this->must = $must;
        $this->id = $id;
        $this->required = $required;
        $this->placeholder = isset($placeholder) ? $placeholder : __(ucfirst($name));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.inputs.input2');
    }
}
