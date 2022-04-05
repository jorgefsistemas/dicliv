
<div class="w-full px-4 ">
            <form action="{{ route('opinion.store') }}" method="POST" >
                {!! csrf_field() !!}

    <div class="flex flex-wrap items-center justify-between mb-16">

            <div class="w-auto pr-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="numberSerie">numberSerie</label>
                <input required class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('numberSerie') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="numberSerie" name="numberSerie" type="text" placeholder="numberSerie">
                @error('numberSerie')
                    <span class="text-xs italic text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="w-auto pr-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="originVehicle">originVehicle</label>
                {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('originVehicle') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="originVehicle" wire:model="originVehicle" type="text" placeholder="originVehicle"> --}}
                <select required
                class="block w-full mt-1 sm:rounded-lg"
                name="originVehicle" id="originVehicle">
                    <option value="">Selecciona un origen</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                @error('originVehicle')
                    <span class="text-xs italic text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-auto pr-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="curp">curp</label>
                <input required class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('curp') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="curp" name="curp" type="text" placeholder="curp">
                @error('curp')
                    <span class="text-xs italic text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-auto pr-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="folioOpinion">folio Opinion</label>
                <input required class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('folioOpinion') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="folioOpinion" name="folioOpinion" type="text" placeholder="folioOpinion">
                @error('folioOpinion')
                    <span class="text-xs italic text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-auto pl-3 text-right">

                <div class="w-auto pl-3 text-right">
                    <a href="/opinion/create">
                        <button  class="px-3 py-2 text-orange-500 bg-orange-200 rounded hover:bg-orange-500 hover:text-orange-100">Create Dictamen</button></a>
                    {{-- <button :click="store()" class="px-3 py-2 text-purple-500 bg-purple-200 rounded hover:bg-purple-500 hover:text-purple-100">Agregar dictamen</button> --}}
                </div>
            </div>
        </form>
    </div>
</div>
