<?php

namespace Paulido\Ui\Classes\Alerts;

use Illuminate\View\Component;

class Dismiss extends Component
{

    public $type;
    public $texte;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = "success", $texte)
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
        return view('ui.alerts.dismiss');
    }
}
