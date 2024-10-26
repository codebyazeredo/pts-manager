<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-8">

            {{--Título--}}
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Animais') }}
            </h2>

            {{--Submenu--}}
            <div>
                @component('animal.submenu')@endcomponent
            </div>
        </div>
    </x-slot>

    @include('animal.modal-create')
            {{--Sessão Principal--}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-animal">
                        Adicionar Animal
                    </button>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
