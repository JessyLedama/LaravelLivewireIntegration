<div style="text-align: center; wid">

    <button wire:click="increment">+</button>

    <h1>{{ $count }}</h1>

    <button wire:click="decrement">-</button>

    <form action="">
        @csrf 
        <input type="text" placeholder="Name">
    </form>
</div>
