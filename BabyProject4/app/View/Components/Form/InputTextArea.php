<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputTextArea extends Component
{
    public $name;
    public $old;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$old = null)
    {
        $this->name = $name;
        $this->old = $old;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input-text-area');
    }
}
