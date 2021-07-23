<?php

namespace Paulido\Ui\Classes\Modals;

use Illuminate\View\Component;

class Top extends Component
{
   
   
    public $id;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = "actionmodal", $title = "Confirmation")
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modals.top');
    }
}
