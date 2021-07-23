<?php

namespace Paulido\Ui\Classes\Cards;

use Illuminate\View\Component;

class card extends Component
{
    public $title;
    public $btn;
    public $btnid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $btn, $btnid = 'btn-id')
    {

        $this->title = $title;
        $this->btn = $btn;
        $this->btnid = $btnid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.card');
    }
}
