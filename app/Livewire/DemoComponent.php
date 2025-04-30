<?php

namespace App\Livewire;

use Livewire\Component;

class DemoComponent extends Component
{
    public $name = 'Nabil';

    public $score = 0;
    public function clickForIncrement()
    {
       $this->score++; 
    }
    public function clickForDecrement()
    {
        $this->score--;
    }
    public function render()
    {
        return view('livewire.demo-component');
    }
}
