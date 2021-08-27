<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class ModalLogin extends Component
{
   
   
    public $id;
    public $title;
    public $type;
    public $textright;
    public $textleft;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = "actionmodal", $title = "Confirmation", $type = 'button', $textleft = 'Close', $textright = 'Confirm')
    {
        $this->id = $id;
        $this->title = $title;
        $this->type = $type;
        $this->textleft = $textleft;
        $this->textright = $textright;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.modals.login');
    }
}
