<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class DropdownItem extends Component
{

    public $text;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = 'Item', $icon = null)
    {
        $this->text = $text;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.menus.dropdown-item');
    }
}
