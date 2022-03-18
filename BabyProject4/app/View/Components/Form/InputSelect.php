<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputSelect extends Component
{
    public $name;
    public $elements;
    public $sname;
    public $old;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$elements,$sname = "",$old = null)
    {
        $this->name = $name;
        $this->elements = $elements;
        $this->sname = $sname;
        $this->old = $old;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input-select');
    }
}
