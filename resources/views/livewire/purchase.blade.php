<div>

    <div>
        <button wire:click="loadData" class="px-4 py-2 bg-blue-500 text-white rounded">
            Load Data
        </button>
    </div>

    <!-- Spinner displayed during loading -->
    <div wire:loading class="mt-3">
        <svg class="animate-spin h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
        </svg>
    </div>

    <!-- Data displayed after loading -->
    <div wire:loading.remove class="mt-3">
        @if($data)
            <p>Data loaded: {{ $data }}</p>
        @endif
    </div>
    <br><br>

    <div
        x-data="{ title: 'Hello' }"
{{--        @set-title.window="title += $event.detail"--}}
        @set-title.window="console.log(123456789);"
    >
        <h1 x-text="title"></h1>
    </div>

    <div x-data>
        <button @click="$dispatch('set-title', 'Hello World!')">Click me</button>
    </div> <br>

    <div x-data>
        <div @notify.window="console.log($event)"></div>
        <button @click="$dispatch('notify')" >Click</button>
    </div> <br>
{{--    <div x-data>--}}
{{--        <div @notify.window="alert($event)">--}}
{{--        <button @click="$dispatch('notify')" >Click</button>--}}
{{--    </div> <br>--}}
    <div>{{ $text }}</div> <br>
{{--    {{$this->html->toHtml()}}--}}
{{--    <div>--}}
{{--        <button wire:click="$emit('userUpdated', 23)">Update User</button>--}}
{{--    </div> <br>--}}
{{--    <div>{{  }}</div> <br>--}}
{{--    <div>{{  }}</div> <br>--}}

    @script
    <script>
        $wire.on('my-ev', (event) => {
            console.log(event);
            console.log(123456789);
        });

        window.Livewire.on('play-alert-sound', function() {
            console.log("window.Livewire.on('play-alert-sound");
        });

        window.Livewire.on('play-alert-sound', function() {
            console.log("cool");
        });
    </script>



    @endscript

</div>
