<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\HtmlString;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\On;

class Purchase extends Component
{
    public $text = __CLASS__;
    public $data;

    #[On('my-ev')]
    public function handleEvent($version)
    {
        $this->text .= ' + chunk -> ' . $version;
    }

    public function loadData()
    {
        // Simulate a delay for loading data
        sleep(2);
        $this->data = 'Sample Data Loaded!';
    }

    public function render()
    {
        return view('livewire.purchase');
    }
}
