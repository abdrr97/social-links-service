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
                            @foreach ($links as $link)
                            <tr>

                                <x-table-data>{{ $link->name }}</x-table-data>
                                <x-table-data>
                                    <a target="_blank" href="{{ $link->link }}">{{ $link->link }}</a>
                                </x-table-data>

                                <x-table-data>
                                    {{ $link->visits_count }}
                                </x-table-data>

                                <x-table-data>
                                    {{ $link->latest_visit ? $link->latest_visit->created_at->format('M j Y - H:ia') : 'No visits YET!'  }}
                                </x-table-data>

                                <x-table-data>
                                    <div class="flex justify-around">
                                        <x-button-table href="{{ route('links.edit',['link'=>$link->id]) }}">
                                            Edit
                                        </x-button-table>
                                    </div>
                                </x-table-data>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="flex items-center justify-end mt-4">
                        <a class="mt-3" href="{{ route('links.create') }}">
                            {{ __('Add a Link') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
