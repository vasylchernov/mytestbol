<x-app-layout>

    <div class="p-6 max-w-xl mx-auto my_dark dark"><br><br>

        <x-mail-layout> content_from_slot </x-mail-layout>

        <br><br>

        <div>
            <p class="text-xs text-gray">simple text example</p>
            <p class="text-sm text-gray">simple text example</p>
            <p class="text-base text-gray">simple text example</p>
            <p class="text-lg text-gray">simple text example</p>
            <p class="text-4xl text-my_gray font-my_sans">simple text example - 4xl</p>
            <p class="text-6xl text-my_gray font-my_serif">simple text example - 6xl</p>
            <p class="text-8xl text-my_gray">simple text example - 8xl</p>
        </div>

        <br><br>

        <div class="dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            <div>
            <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
            </span>
            </div>
            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Writes Upside-Down</h3>
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm font-bold">
                <span class="text-primary-500">The Zero Gravity</span> <span class="text-transparent">Pen can be used</span> to write in any orientation, including upside-down. It even works in outer space.
            </p>
        </div>

        <br><br>

        <div class="text-center sm:text-left dark:bg-slate-800">example</div>

        <br><br>

        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
{{--                <div class="md:shrink-0">--}}
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{asset('storage/images/nature.jpg')}}" alt="Modern building architecture">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Company retreats</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible accommodation for your team</a>
                    <p class="mt-2 text-slate-500">Looking to <span class="sm:uppercase 2xl:text-purple-600">take your team</span> away on a retreat to enjoy awesome food and take in some sunshine? We have a list of places to do just that.</p>
                </div>
            </div>
        </div>

        <br><br>

        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{asset('storage/images/nature.jpg')}}" alt="Modern building architecture">
                </div>
                <div class="p-5">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Company retreats</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible accommodation for your team</a>
                    <p class="mt-2 text-slate-500">Looking to take your team away on a retreat to enjoy awesome food and take in some sunshine? We have a list of places to do just that.</p>
                </div>
                <div class="p-5">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Company retreats</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible accommodation for your team</a>
                    <p class="mt-2 text-slate-500">Looking to take your team away on a retreat to enjoy awesome food and take in some sunshine? We have a list of places to do just that.</p>
                </div>
            </div>
        </div>

        <br><br>

        <div>
            <img class="w-8 sm:w-16 md:w-32 lg:w-48 xl:w-64 2xl:w-80" src="{{asset('storage/images/nature.jpg')}}">
        </div>

        <br><br>

        <div>
            <div class="portrait:hidden bg-purple-600">
                try to rescale
                This experience is designed to be viewed in landscape. Please rotate your
                device to view the site.
            </div>
            <div class="landscape:hidden bg-amber-900">
                <p>
                    try to rescale
                    This experience is designed to be viewed in landscape. Please rotate your
                    device to view the site.
                </p>
            </div>
        </div>

        <br><br>

        <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-2">
            <div class="px-8 max-w-xl bg-white">grid component</div>
            <div class="px-8 max-w-sm bg-amber-600">span1</div>
            <div class="px-8 max-w-lg bg-amber-50">span2</div>
            <div class="px-8 max-w-md bg-purple-600">span3</div>
        </div>

        <br><br>

        <dialog class="backdrop:bg-gray-50">
            <form method="dialog">
                fdfdf
                <input type="button" value="go">
            </form>
        </dialog>

        <br><br>

        <div class="selection:bg-fuchsia-300 selection:text-white">
            <p>select text</p>
            <p>
                So I started to walk into the water. I won't lie to you boys, I was
                terrified. But I pressed on, and as I made my way past the breakers
                a strange calm came over me. I don't know if it was divine intervention
                or the kinship of all living things but I tell you Jerry at that moment,
                I <em>was</em> a marine biologist.
            </p>
        </div>

        <br><br>

        <form class="flex items-center space-x-6 border-8 border-white focus:border-black hover:border-black hover:border-4">
            <div class="shrink-0">
                <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
            </div>
            <label class="block">
                <span class="sr-only">Choose profile photo</span>
                <input type="file" class="block w-full text-sm text-slate-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-full file:border-0
                      file:text-sm file:font-semibold
                      file:bg-violet-50 file:text-violet-700
                      hover:file:bg-violet-100
                    "/>
            </label>
        </form>

        <br><br>

        <label class="relative block">
            <span class="sr-only">Search</span>
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"><!-- ... --></svg>
            </span>
            <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                   placeholder="Search for anything..." type="text" name="search"/>
        </label>

        <br><br>

        <div class="max-w-sm relative">
            <span class="max-w-sm bg-amber-600 absolute -inset-1 -skew-y-3"></span>
            <span class="relative">example</span>
        </div>

        <br><br>

        <blockquote class="text-2xl font-semibold italic text-center text-slate-900">
            When you look
            <span class="relative">
              <span class="block absolute -inset-1 -skew-y-3 bg-pink-500" aria-hidden="true"></span>
              <span class="relative text-white">simple example</span>
            </span>
            all the time, people think that you're busy.
        </blockquote>

        <br><br>

        <blockquote class="text-2xl font-semibold italic text-center text-slate-900">
            When you look
            <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block">
                <span class="relative text-white">pseudo_el</span>
            </span>
            all the time, people think that you're busy.
        </blockquote>

        <br><br>

        <button class="py-2 px-5 bg-violet-500 text-white font-semibold rounded-full shadow-md hover:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75">
            Save changes
        </button>

        <br><br>

        <!-- After extracting a custom class -->
        <button class="btn-primary">
            Save changes
        </button>

        <br><br>

        <!-- After extracting a custom class -->
        <button class="btn-primary">
            Save changes2
        </button>

        <br><br>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            GO
        </button>

        <br><br>

        <input type="button" value="input" class="bg-amber-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" />
    </div>

    <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-xl flex items-center space-x-4">
        <div class="shrink-0">
            <img class="size-12" src="{{ asset('storage/images/user-icon.png') }}" alt="ChitChat Logo">
        </div>
        <div>
            <div class="text-xl font-medium text-black">ChitChat</div>
            <p class="text-slate-500">You have a new message!</p>
        </div>
    </div>

    <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
        <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0" src="{{ asset('storage/images/w_face.png') }}" alt="Woman's Face" />
        <div class="text-center space-y-2 sm:text-left">
            <div class="space-y-0.5">
                <p class="text-lg text-black font-semibold">
                    Erin Lindford
                </p>
                <p class="text-slate-500 font-medium">
                    Product Engineer
                </p>
            </div>
            <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Message</button>
        </div>
    </div>

</x-app-layout>
