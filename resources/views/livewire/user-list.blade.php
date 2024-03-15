<div>
    <ul>
        @foreach ($this->users as $user)
            <li wire:model.live="$this->users">
                {{ $user->name }} | {{ $user->email }}
            </li>
        @endforeach
    </ul>

    {{ $this->users->links() }}
</div>
