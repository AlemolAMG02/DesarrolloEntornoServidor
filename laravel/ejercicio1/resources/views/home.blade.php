<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Página de inicio del catálogo de películas de Alemol. En esta página encontrarás películas de
                        todo tipo gracias a su amplio catálogo que recoge largometrajes de todo tipo como acción,
                        terror, Thriller, románticas, etc.</p>
                    Estoy en el inicio, puedo acceder sin iniciar sesión
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
