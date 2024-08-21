<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Homepage extends Component
{
    public $products;
    public array $p2;
    /**
     * Create a new component instance.
     */
    public function __construct($p2, $products)
    {
        $this->p2 = $p2;
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $test = 'test_value';
        return view('components.homepage', compact('test'));
    }
}
