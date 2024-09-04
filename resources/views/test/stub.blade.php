<x-app-layout>

    <div class="mx-auto my_dark px-8 max-w-xl">

        <div>
            <livewire:purchase />
        </div>
        <br><br>

        <div>
            <livewire:navigator />
        </div>
        <br><br>

        <div x-data="{ prop: 'def' }">
            <button x-on:click="$dispatch('xxx')" type="button" class="bg-blue-500 text-white px-4 py-2 rounded">Click</button>
            {{--        <button @click="console.log('123')" type="button">Click</button>--}}
            <br>
            <div x-text="prop" />
        </div>
        <br><br>

        <div x-data="{ isOpen: false }"
             x-cloak
             x-on:xxx.window="isOpen = true"
             x-show="isOpen"
             @click="isOpen = false">

            <ul>
                <li>aaa</li>
                <li>bbb</li>
            </ul>
        </div>
{{--        <script>console.log(555);</script>--}}

        <br><br><br><br>

        @if (session('page'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-md" role="alert">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m0 6v3h-3v-3h-4v3H6v-3H3v-6h3v3h6v-3h3v3h3v-3h3v6z"></path>
                    </svg>
                    <div>
                        <strong class="font-bold">Success!</strong> {{ session('page') }}
                    </div>
                    <button type="button" class="ml-auto bg-green-200 text-green-700 rounded-full p-1" onclick="this.parentElement.style.display='none';">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <div>

            @foreach($data as $it)
                <p>{{ $it }}</p>
            @endforeach

        </div>

    </div>
</x-app-layout>
