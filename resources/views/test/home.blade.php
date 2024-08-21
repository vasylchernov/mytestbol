<x-app-layout>

    <div class="p-8 max-w-sm mx-auto my_dark">

        <div>home page</div>

        <br>

        <x-homepage
            :products="$products"
            :p2="$p2"

{{--            :img="asset('storage/images/lib.jpg')"--}}
        />

        <br>

        <x-my-comp  :titleMyComp="$titleMyComp" :img="$img" />
        <x-my-comp  :titleMyComp="$titleMyComp" :img="null" />

    </div>

</x-app-layout>
