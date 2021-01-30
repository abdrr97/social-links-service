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
                    <h3> {{ __('Editing user settings') }}</h3>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('user.edit') }}">
                        @csrf
                        @method('PUT')

                        <!-- Username -->
                        <div class="mt-5">
                            <x-label for="username" :value="__('Username')" />

                            <x-input disabled class="text-gray-400 block mt-1 w-full" id="username" type="text"
                                name="username" :value="$user->username" />
                        </div>

                        <!-- Email -->
                        <div class="mt-5">
                            <x-label for="email" :value="__('Email')" />

                            <x-input disabled class="text-gray-400 block mt-1 w-full" id="email" type="text"
                                name="email" :value="$user->email" />
                        </div>

                        <div class="mt-5 flex items-center justify-between">
                            <!-- Text Color -->
                            <x-label for="text_color" :value="__('Text Color')" />

                            <x-input class="block mt-1 w-60" id="text_color" type="color" name="text_color"
                                :value="$user->text_color" autofocus />
                            <!-- Background Color -->
                            <x-label for="background_color" :value="__('Background Color')" />

                            <x-input class="block mt-1 w-60" id="background_color" type="color" name="background_color"
                                :value="$user->background_color" autofocus />
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-button class="mr-3">
                                {{ __('Save Settings') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
