<?php

namespace Paulido\Ui\View\Components;

use App\Models\r;
use Illuminate\View\Component;

class SubMenu extends Component
{
    
    public $name;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $id = null)
    {
         $this->name = $name;
         $this->id = isset($id) ? $id : genId();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ui::components.menus.sub-menu');
    }
}
