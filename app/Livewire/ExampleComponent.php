<?php

namespace App\Livewire;

use Livewire\Component;

class ExampleComponent extends Component
{

    public $example;

    public function __construct(string $example = 'def')
    {
        $this->example = $example;
    }

    public function render()
    {
        return view('livewire.example-component');
    }

    public function inc(string $ex)
    {
        $this->example .= $ex;
    }

    public function dec()
    {
        $this->example = substr($this->example, 0, strlen($this->example) - 1);
    }
}
