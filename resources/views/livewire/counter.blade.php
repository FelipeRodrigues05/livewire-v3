<div>
    Counter:: {{ $counter }}
    <br>
    <x-text-input type="text" wire:model.live="name" />
    <x-primary-button wire:click="refresh">Reload</x-primary-button>
    
    <br>
    <br>
    <div x-data="">
        <span x-text="$wire.name"></span>
        <x-secondary-button @click="$wire.set('name', 'Juninho')">change name</x-secondary-button>
    </div>
    <div>
        {{ $this->fullName }}
    </div>
</div>
