<x-app-layout>

    <div class="my_dark max-w-xl mx-auto p-8">
        <h1 class="uppercase tracking-wide text-indigo-600 text-sm font-semibold">search Posts</h1>
        <br>
        <form action="{{ route('sr') }}" method="GET"
              class="flex items-center space-x-6 border-8 border-white focus:border-black hover:border-black hover:border-4 pt-2">
            @csrf
            <label class="block p-2">
                <input type="text" name="query" placeholder="Search for posts..." required
                       class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm">
                <br>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    GO
                </button>
            </label>
        </form>
    </div>

</x-app-layout>
