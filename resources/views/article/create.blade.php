<x-app-layout>

    <h1>Media</h1>

    <form method="POST" enctype="multipart/form-data" action="{{ route('save_file') }}">
        @csrf

        <div>
            <input class="" type="file" name="image">
        </div>

        <div>
            <input class="mt-4 py-2 px-4 rounded-md text-white bg-purple-600" type="submit">
        </div>
    </form>
</x-app-layout>
