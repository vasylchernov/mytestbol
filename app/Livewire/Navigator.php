<?php

namespace App\Livewire;

use Livewire\Component;

class Navigator extends Component
{
    public $name = 'NavigatorComponent';
    public $searchState = 'OFF';
    public $state = false;
    public $eventNumber = 0;

    public function search() {
        $this->searchState = ('ON' === $this->searchState) ? 'OFF' : 'ON';
    }

    public function myEventMethod() {
        $this->searchState = ('ON' === $this->searchState) ? 'OFF' : 'ON';
    }

    public function searchProduct() { return 'XXXXXXXXXXX'; }

    public function inc()
    {
        $this->eventNumber++;
//        $this->dispatch('event-number-inc', $title/*, number: $this->eventNumber*/);
        $this->dispatch('my-ev', version: $this->eventNumber /*, title: 't1-title'*/);
        $this->dispatch('play-alert-sound'/*, version: $this->eventNumber , title: 't1-title'*/);
    }
    public function render()
    {
        return view('livewire.navigator');
    }
}
