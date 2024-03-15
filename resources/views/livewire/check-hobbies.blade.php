<div>
    @if ($bulkModerate)
        <x-primary-button>aprovar</x-primary-button>
        <x-secondary-button>reprovar</x-secondary-button>
    @else
        <x-primary-button disabled class="opacity-50">aprovar</x-primary-button>
        <x-secondary-button disabled class="opacity-50">reprovar</x-secondary-button>
    @endif
    <div class="flex flex-col">
        <p class="text-lg font-medium">Hobbies</p>
        <label>
            <input type="checkbox" value="select-all" wire:click="$toggle('selectAll')" class="rounded form-checkbox" />
            Select All
        </label>
        <label>
            <input type="checkbox" wire:model.live="hobbies" value="playing" class="rounded form-checkbox" />
            Playing
        </label>
        <label>
            <input type="checkbox" wire:model.live="hobbies" value="coding" class="rounded form-checkbox" />
            Coding
        </label>
        <label>
            <input type="checkbox" wire:model.live="hobbies" value="listening" class="rounded form-checkbox" />
            Listening
        </label>
        <div>
            Hobbie::
            @foreach ($hobbies as $hobbie)
                {{ $hobbie }}
            @endforeach
        </div>

        Is all Selected?
        {{ var_export($selectAll) }}
        <br>
        Bulk Moderate::
        {{ var_export($bulkModerate) }}

    </div>

</div>
