<div>
    <h1 class="text-success">Demo Component livewire</h1>
    <h1>Hi, {{ $name }}</h1>
    <h3>Score : {{ $score }}</h3>
    <div>
        <button class="btn btn-primary" wire:click="clickForIncrement">Click +</button>
        <button class="btn btn-danger" wire:click="clickForDecrement">Click -</button>
    </div>
</div>
