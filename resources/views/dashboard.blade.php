<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="m-10">
                <h1 class="font-bold text-xl tracking-wide">Leagues</h1>
            </div>
            @if($leagues->count()>0)
            @foreach($leagues as $league)
                <div class="m-10">
                    <h1 class="text-gray-500 text-xl tracking-wide">{{ $league->name }}</h1>
                </div>
            @endforeach
            @else
            <div>League is empty</div>
            @endif
        </div>

    </div>
</x-app-layout>
