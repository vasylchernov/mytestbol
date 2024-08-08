<x-app-layout>

    <div class="my_dark mx-auto max-w-xl p-8">

        <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Search Results for query - "{{ $query }}"</div>

            <div>
                @if($posts->isEmpty())
                    <p class="mt-2 text-slate-500">No posts found.</p>
                @else
                    <ul>
                        @foreach($posts as $post)
                            <li>{{ $post->title }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <br>
            <a href="{{ route('sf') }}"
               class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Back to Search Form</a>
        </div>

    </div>

</x-app-layout>
