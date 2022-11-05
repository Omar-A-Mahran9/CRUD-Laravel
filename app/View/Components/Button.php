<?php

namespace App\View\Components;

use Dotenv\Parser\Value;
use Illuminate\View\Component;

class Button extends Component
{
  public $value;
  public $co;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color)
    {
        $this->co = $color;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
