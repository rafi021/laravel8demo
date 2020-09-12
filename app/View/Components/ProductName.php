<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductName extends Component
{
    public $fruits;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fruits)
    {
        $this->fruits = $fruits;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-name');
    }
}
