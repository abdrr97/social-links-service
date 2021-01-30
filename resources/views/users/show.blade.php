<x-app-layout class="bg-red-500" :color="$user->background_color">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="overflow-hidden max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex-col text-center ">

                <p>
                    <img style="border:5px solid {{ $user->text_color }}"
                        class="rounded-full h-32 w-32 flex items-center justify-center mx-auto mb-4"
                        src="https://abdrr97.netlify.app/images/img.png" />
                </p>


                <a target="_blank" href="{{ route('user.show',['user'=>$user ]) }}">{{ '@'.$user->username }}</a>

                @foreach ($user->links as $link)
                <p style="border:2px solid {{ $user->text_color }};background-color:transparent;" class=" rounded-lg
                         p-4 m-4 w-1/3 flex items-center justify-center mx-auto">
                    <a style="color:{{ $user->text_color }};" class="user-link text-gray-900" rel="nofollow"
                        target="_blank" href="{{ $link->link }}" data-link-id="{{ $link->id }}">
                        {{ $link->name }}
                    </a>
                </p>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
