<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $submit;
    public $text;
    public $btnStyle;
    public $btnId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $submit = false, $text = 'Enregister', $btnStyle = 'primary', $btnId = 'id1')
    {

        $this->title = $title;
        $this->submit = $submit;
        $this->text = $text;
        $this->btnStyle = $btnStyle;
        $this->btnId = $btnId;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.cards.card');
    }
}
