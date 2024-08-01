<x-app-layout>

    <div class="p-8 max-w-sm mx-auto my_dark">

        <div x-data="{ show: false }" class="p-4 border-2 border-black">
            <!-- This content will be hidden initially and shown when Alpine is ready -->
            <div x-cloak>
                <p>The content is ready to be shown!</p>
            </div>

            <!-- A button to toggle visibility of content -->
            <button @click="show = !show" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">
                Toggle Content
            </button> <br><br>

            <!-- Content that is conditionally shown based on Alpine state -->
            <div x-show="show" x-cloak class="p-2 border-2 border-black">
                <p>This is the toggled content that also uses x-cloak to avoid initial flash.</p>
            </div>
        </div> <br><br>

        <div x-data="{ open: false }">
            <input type="submit" @click="open = !open">
            <span x-show="open" @click.outside="open = false">content ...</span>
        </div> <br><br>

        <div x-data="{ base: 'base' }" @mouseover="base += '_mouseover'" x-text="base"></div> <br><br><br>

        <div x-data="{ p1: 'start' }">
            <input type="submit" x-on:click="p1 += '_new'">
            <p x-text="p1"></p>
            <p x-text="p1"></p>

            <div >
                <span x-text="p1"></span>
            </div>
        </div> <br><br>

    </div>

</x-app-layout>
