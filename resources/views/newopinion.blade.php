<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Dictamenes') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <form action="/opinion/create" method ="POST" submit="store"> --}}
                    <form action="{{ route('opinion.store') }}" method="POST">
                        @csrf


                    <slot name="title">
                        {{ __('Alta \'s de Documentos') }}
                    </slot>

                    <slot name="description">
                      {{ __('Ingresa loa información Solicitada.') }}
                    </slot>

                    <slot name="form">
                      <!-- Name -->
                      <div class="col-span-6 sm:col-span-4">
                        <label for="numberSerie" value="{{ __('Serie Number') }}" />
                        <input name="numberSerie" id="numberSerie" type="text" class="mt-1 block w-full"  autocomplete="off" />
                      </div>
                      <div class="col-span-6 sm:col-span-4">
                        <label for="originVehicle" value="{{ __('origin of the vehicle') }}" />

                        <select
                        class="mt-1 block w-full sm:rounded-lg"
                        name="originVehicle" id="originVehicle">
                            <option value="">Selecciona un origen</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        {{-- </x-jet-input> --}}
                      </div>
                      <div class="col-span-6 sm:col-span-4">
                        <label for="curp" value="{{ __('CURP') }}" />
                        <input name="curp" id="curp" type="text" class="mt-1 block w-full"  autocomplete="off" />
                      </div>
                      <div class="col-span-6 sm:col-span-4">
                        <label for="folioOpinion" value="{{ __('Folio Opinion') }}" />
                        <input name="folioOpinion" id="folioOpinion" type="text" class="mt-1 block w-full" autocomplete="off" />
                      </div>
                    </slot>

                    <!-- Submit -->
                    <slot name="actions">


                        <button  type="submit" class="px-3 py-2 bg-orange-200 text-orange-500 hover:bg-orange-500 hover:text-orange-100 rounded">Actualizar contacto</button>
                    </slot>
                    </slot>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
