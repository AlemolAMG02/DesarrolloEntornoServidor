<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show peli') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Entro para mostrar la película: {{$id}}.
                </div>
                <div class="flex justify-center">
                    <img src="https://picfiles.alphacoders.com/147/147078.jpg" class="mt-2"
                         width="200px">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


