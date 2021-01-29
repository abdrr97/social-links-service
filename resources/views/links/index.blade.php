<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Links page</h3>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <x-table-head> Name </x-table-head>
                                <x-table-head> Url </x-table-head>
                                <x-table-head> Visits </x-table-head>
                                <x-table-head> Last Visit </x-table-head>
                                <x-table-head> Actions </x-table-head>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr>

                                @foreach ($links as $link)
                                <x-table-data>{{ $link->name }}</x-table-data>
                                <x-table-data>
                                    <a href="{{ $link->link }}">{{ $link->link }}</a>
                                </x-table-data>

                                <x-table-data>
                                    0
                                </x-table-data>

                                <x-table-data>
                                    Aug 3, 2020 - 12:30pm
                                </x-table-data>

                                <x-table-data>
                                    <x-button-table href="{{ route('links.edit',['id'=>$link->id]) }}">
                                        Edit
                                    </x-button-table>
                                </x-table-data>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>

                    <x-table.button></x-table.button>
                    {{-- <a href="{{ route('links.create') }}">
                        Add Link
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
