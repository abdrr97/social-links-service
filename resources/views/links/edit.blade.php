<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Edit Link</h3>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('links.update',['link'=>$link]) }}">
                        @csrf
                        @method('PUT')
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Link Name')" />

                            <x-input class="block mt-1 w-full" id="name" type="text" name="name" :value="$link->name"
                                autofocus />
                        </div>

                        <!-- Link -->
                        <div class="mt-4">
                            <x-label for="link" :value="__('Link URL')" />

                            <x-input class="block mt-1 w-full" id="link" type="url"
                                placeholder="https://youtube.com/user/my-channel" name="link" :value="$link->link" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="mr-3">
                                {{ __('Save Link') }}
                            </x-button>
                            <x-button onclick="event.preventDefault();document.querySelector('#delete_form').submit()"
                                href="{{ route('links.destroy',['link'=>$link->id]) }}">
                                Delete
                            </x-button>


                        </div>
                    </form>
                    <form id="delete_form" action="{{ route('links.destroy',['link'=>$link->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
