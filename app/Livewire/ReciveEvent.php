<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ReciveEvent extends Component
{
    public $message = " No Message";
    #[On('message111')]
    public function displayMessage($message333)
    {
        $this->message = $message333;
    }
    #[On('messageReset11')]
    public function resetMessage()
    {
        $this->reset();
    }
    public function render()
    {
        return view('livewire.recive-event');
    }
}
