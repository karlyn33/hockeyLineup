<x-app-layout>
<x-slot name="header" >
    <div class="flex flex-row justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All the leagues') }}
        </h2>
        <a href="/league/create"><x-primary-button>{{__('+ Add new league')}}</x-primary-button>
        </div></a>
</x-slot>

            @if ($leagues->count()>0)
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-middle text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-4 px-6">
                                league name
                            </th>
                            <th scope="col" class="py-4 px-6">
                                Edit
                            </th>
                            <th scope="col" class="py-4 px-6">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
            @foreach($leagues as $league)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$league->name}}
                </th>
                <th scope="row" class="py-4 px-6 ">
                  <a href="/league/{{$league->id}}/edit"><i class="fa-solid fa-pen-to-square"></i></a>  
                </th>
                <th scope="row" class="py-4 px-6">
                   <form method="POST" action="{{route('league.destroy',$league->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="fa-solid fa-trash"></i></button> 
                </form>
                </th>
            </tr>
    @endforeach                
            @else
<div  class="flex justify-center">Ops! No League has been created. <a class="underline ml-1 hover:text-grey-500" href="{{route('league.create')}}"> Create One</a></div>
            @endif

        </tbody>
    </table>
</div>

</x-app-layout>