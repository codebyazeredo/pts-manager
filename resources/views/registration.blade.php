<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastros') }}
        </h2>

        @component('components.registration.submenu')@endcomponent

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("SESSÃO DE CADASTROS") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
