<div>
    {{ $name }} <br>
    <span class=" text-black text-lg ">{{ $searchState }}</span> <br>
    <x-my-link wire:click="search()"  class="MY_TEST_CLASS">link 2</x-my-link>  <br>
    <div style="background-color: #ccc; width: 100px; height: 100px; ">
        <x-loading-spinner
            class="animate-spin -ml-1 mr-3 h-8 w-8 text-black"
            wire:loading="state" wire:target="searchProduct" ></x-loading-spinner>
    </div> <br>
    <div class="text-green-50 text-lg" wire:click="inc()" id="ev">
        {{ $eventNumber }}
    </div> <br>
</div>

@script
<script>
    document.getElementById('ev').onclick = function () {
        console.log('nav tpl clicked');
        $wire.on('my-ev', { version: 22 })
    }

    $wire.on('my-ev', (event) => {
        console.log(event.detail);
        console.log(4444);
    });
</script>
@endscript
