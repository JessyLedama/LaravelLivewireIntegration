

<div style="text-align: center; width:100%">

    <button wire:click="increment">+</button>

    <h1>{{ $count }}</h1>

    <button wire:click="decrement">-</button>

    <div class="row">
        <form class="col-md-12" action="">
            @csrf 
            <input type="text" placeholder="Name">
        </form>
    </div>
</div>
