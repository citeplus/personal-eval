<div>
    <form action="" wire:submit="add">
        <input type="text" wire:model.live.debounce.1000ms='todo'>
        <span>current {{$todo}}</span>
        <button type="submit">+Add</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
