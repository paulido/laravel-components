<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Select2 extends Component
{
    public $name;
    public $label;
    public $d;
    public $selected;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $d = null, $label, $selected = 0)
    {

        $this->name = $name;
        $this->d = $d;
        $this->label = $label;
        $this->selected = intval($selected);

    }

    /**
     * Determine if the given option is the currently selected option.
     *
     * @param  string  $option
     * @return bool
     */
    public function isSelected($option)
    {
        return $option === $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.selects.select2');
    }
}
