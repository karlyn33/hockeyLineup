<x-app-layout>
    <div class="flex flex-col justify-center items-center pt-6  bg-gray-100">
    <div class="text-lg"><i class="fa-solid fa-flag mr-1"></i>Edit your league</div>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{route('league.update',$league->id)}}">
            @csrf
            @method('PUT')
            <div>
             <x-input-label for="name" :value="__('Name')"/>
             <x-text-input id="name" class="mt-1 w-full" type="text" name="name" value="{{$league->name}}"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <x-primary-button class="mt-3">
             {{__('Update')}}
            </x-primary-button>
         </form>
    </div>
    </div>
    
    </x-app-layout>