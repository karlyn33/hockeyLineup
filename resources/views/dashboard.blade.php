<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="m-10">
                <h1 class="text-gray-500 font-bold text-2xl tracking-wide">Leagues</h1>
            </div>

            <div class="flex justify-between grid grid-cols-3 gap-6 m-10 mb-10">
                <!-- START Card component -->
                <article class="container bg-white shadow-2xl rounded-2xl p-5">
                    <h1 class="font-bold text-yellow-500">30 ans et +</h1>
                    <h6 class="text-sm text-gray-300 mb-5">Publiée le 08/10/2022</h6>
                    <a href="#" class="rounded-lg py-2 px-4 text-center text-white bg-gray-800 hover:bg-gray-700">Modifier</a>
                </article>
                <!-- END Card component -->
            </div>
        </div>


    </div>
</x-app-layout>
