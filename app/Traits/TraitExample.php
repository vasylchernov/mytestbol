<?php

namespace App\Traits;

trait TraitExample
{
    public function getName(): string
    {
        return __FILE__;
    }

    public function getDataFromExample(): void
    {
        dd($this->data);
    }
}
