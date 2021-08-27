<?php

namespace Paulido\Ui\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $text;
    public $logo;
    public $dismiss;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = 'Dashboard', $logo = null, $dismiss = 'times')
    {
        $this->text = $text;
        $this->logo = $logo;
        $this->dismiss = $dismiss;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.sidebars.sidebar');
    }
}
