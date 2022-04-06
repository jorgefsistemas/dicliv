<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Edicion de Dictamenes') }}
    </h2>
  </x-slot>

  {{-- @php
  $array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
    echo $valor;
}
 $opciones=[1,2,3];
  @endphp --}}

  <div class="w-full overflow-hidden ">
    <form action="{{ route('opinion.update', $idEdit->id ) }}" method="POST">
      {!! csrf_field() !!}
      @method('PUT')
      <div class="flex flex-wrap justify-between items-center mb-16">

        <div class="w-auto pr-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="numberSerie">numberSerie</label>
          <input required class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('numberSerie') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="numberSerie" name="numberSerie" type="text" value="{{$idEdit->numberSerie}}" placeholder="numberSerie">
          @error('numberSerie')
          <span class="text-red-500 text-xs italic">{{ $message }}</span>
          @enderror
        </div>

        <div class="w-auto pr-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="originVehicle">originVehicle</label>
          {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('originVehicle') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="originVehicle" wire:model="originVehicle" type="text" placeholder="originVehicle"> --}}
          @php $opciones=[1,2,3];
          // echo("originVehicle");
          // echo($idEdit->originVehicle);
          @endphp
          <select required class="mt-1 block w-full sm:rounded-lg" name="originVehicle" id="originVehicle">
            <option value="">Selecciona un origen</option>
            <option value=1 <?php if ( $opciones[0] == $idEdit->originVehicle) { echo 'selected'; } ?>>1</option>
            <option value=2 <?php if ( $opciones[1] == $idEdit->originVehicle) { echo 'selected'; } ?>>2</option>
            <option value=3 <?php if ( $opciones[2] == $idEdit->originVehicle) { echo 'selected'; } ?>>3</option>
          </select>

          @error('originVehicle')
          <span class="text-red-500 text-xs italic">{{ $message }}</span>
          @enderror
        </div>

        <div class="w-auto pr-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="curp">curp</label>
          <input required  class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('curp') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="curp" name="curp" value="{{$idEdit->curp}}" type="text" placeholder="curp">
          @error('curp')
          <span class="text-red-500 text-xs italic">{{ $message }}</span>
          @enderror
        </div>

        <div class="w-auto pr-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="folioOpinion">folio Opinion</label>
          <input required class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('folioOpinion') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="folioOpinion" name="folioOpinion" value="{{$idEdit->folioOpinion}}" type="text" placeholder="folioOpinion">
          @error('folioOpinion')
          <span class="text-red-500 text-xs italic">{{ $message }}</span>
          @enderror
        </div>

        <div class="w-auto pl-3 text-right">
          {{-- <a href="/opinion/{{$idEdit->id}}/editar"> --}}
          <button type=submit class="px-3 py-2 bg-orange-200 text-orange-500 hover:bg-orange-500 hover:text-orange-100 rounded">Update Dictamen</button>
          {{-- </a> --}}

        </div>
    </form>
  </div>
  @include('opinionedit')

</x-app-layout>
