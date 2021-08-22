<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    public $type;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = "success", $text)
    {
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.alerts.dismiss');
    }
}
