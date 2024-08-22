<x-app-layout>
    <div>

        <form action="{{ route('payment.initiate') }}" method="GET">
            <button type="submit"
                    class="py-2 px-5 bg-violet-500 text-white font-semibold rounded-full shadow-md hover:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75">
                Pay with Sisow
            </button>
        </form>

    </div>
    <br><br><br>

    @if(session()->has('start'))
        <div class="alert alert-success">
            {{ session()->get('start') }}
        </div><br>
    @endif

    @if(session()->has('message'))
        <div class="alert alert-success">
            ses
            {{ session()->get('message') }}
        </div>
    @endif
    @if(session()->has('success2'))
        <div class="alert alert-success">
            {{ session()->get('success2') }}
        </div><br>
    @endif

    @if(session()->has('trxid'))
        <div class="alert alert-success">
            ses
            {{ session()->get('trxid') }}
        </div>
    @endif
</x-app-layout>
