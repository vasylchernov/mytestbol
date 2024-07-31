<x-app-layout>


    <div >
        <form action="{{ route('process') }}" method="GET">
            @csrf
            <input type="submit" value="process" />
        </form>
    </div>

    <div >
        {{ $p1 }}
    </div>

    <div >
        {{ print_r($data, 1) }}
    </div>
</x-app-layout>
