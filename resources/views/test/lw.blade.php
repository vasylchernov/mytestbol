<x-app-layout>
    @if (session('user'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-md" role="alert">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m0 6v3h-3v-3h-4v3H6v-3H3v-6h3v3h6v-3h3v3h3v-3h3v6z"></path>
                </svg>
                <div>
                    <strong class="font-bold">Success!</strong> {{ session('user') }}
                </div>
                <button type="button" class="ml-auto bg-green-200 text-green-700 rounded-full p-1" onclick="this.parentElement.style.display='none';">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    @elseif (session('user'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded-md" role="alert">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m0 6v3h-3v-3h-4v3H6v-3H3v-6h3v3h6v-3h3v3h3v-3h3v6z"></path>
                </svg>
                <div>
                    <strong class="font-bold">Error!</strong> {{ session('user') }}
                </div>
                <button type="button" class="ml-auto bg-red-200 text-red-700 rounded-full p-1" onclick="this.parentElement.style.display='none';">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <div>
        {{ \Nette\Utils\Html::htmlToText($html) }}
    </div>

</x-app-layout>
