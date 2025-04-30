<?php

namespace App\Livewire;

use Livewire\Component;

class SendEvent extends Component
{
    public $message333;
    public function sendMessage()
    {
        $this->dispatch('message111', $this->message333);
    }

    public function resetMessage()
    {
        $this->dispatch('messageReset11');
    }
    public function render()
    {
        return view('livewire.send-event');
    }
}
