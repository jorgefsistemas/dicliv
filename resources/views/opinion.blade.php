<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Dictamenes') }}
    </h2>
  </x-slot>
  <div>

    {{--
    @if($updateMode)
            @include('update')
        @else
            @include('create')
        @endif --}}

    @isset($updateMode)
    @echo($updateMode);
    @include('update')
    @else
    @include('create')
    @endisset


    {{-- opinion/{{ $item->id }}/edit --}}
    {{-- <form action="{{ route('opinion/{{ $item->id }}/edit') }}" method="GET"> --}}
    {{-- <form action=`{{ route("opinion/$item->id/edit")}}` method="GET"> --}}
    {{-- <form > --}}



    <table class="w-full px-4 overflow-hidden table-auto ">
      <thead>
        <tr class="bg-gray-200">
          <th class="px-4 py-2">#</th>
          <th class="px-4 py-2">Número de Serie</th>
          <th class="px-4 py-2">Origen del Vehículo</th>
          <th class="px-4 py-2">CURP</th>
          <th class="px-4 py-2">Folio del Dictamen</th>
          <th class="px-4 py-2">acciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($data as $item)
        <tr class="text-center">
          <td class="px-4 py-2 border">{{ $item->id }}</td>
          <td class="px-4 py-2 border">{{ $item->numberSerie }}</td>
          <td class="px-4 py-2 border">{{ $item->originVehicle }}</td>
          <td class="px-4 py-2 border">{{ $item->curp }}</td>
          <td class="px-4 py-2 border">{{ $item->folioOpinion }}</td>

          <td class="inline px-4 py-2 border display:">
            {{-- <button wire:click="edit({{ $item->id }})" class="px-2 py-1 text-blue-500 bg-blue-200 rounded hover:bg-blue-500 hover:text-white">Editar</button> --}}
            {{-- <button wire:click="destroy({{ $item->id }})" class="px-2 py-1 text-red-500 bg-red-200 rounded hover:bg-red-500 hover:text-white">Borrar</button> --}}
            {{-- <form action="{{ route('opinion/',$item->id) }}" method="POST" > --}}
            {{-- <form> --}}
            {{-- <form action="{{ route('opinion/26') }}" method="POST" > --}}
            {{-- <form action="{{ route('opinion/'.$item->id.'/edit',) }}"> --}}
            <form action="{{ route('opinion.destroy',$item->id ) }}" method="POST">
              {!! csrf_field() !!}
              @method('DELETE')
              <a href="{{ route('opinion.edit',  $item->id) }}">
                {{-- <i class="fas fa-edit fa-lg"></i> --}}
                <button type=button class="px-2 py-1 text-blue-500 bg-blue-200 rounded hover:bg-blue-500 hover:text-white">Editar</button>

              </a>



              {{-- <a href="{{ route('opinion.edit',  $item->id) }}"> --}}
              {{-- <i class="fas fa-edit fa-lg"></i> --}}
              <button type=submit class="px-2 py-1 text-red-500 bg-red-200 rounded hover:bg-red-500 hover:text-white show_confirm">Eliminar</button>
            </form>



            {{-- </form> --}}
            {{-- </form method="POST"> --}}
            {{-- <button  class="px-2 py-1 text-red-500 bg-red-200 rounded hover:bg-red-500 hover:text-white">Borrar</button>  --}}
          </td>
        </tr>
        @empty
        <tr class="text-center">
          <td colspan="4" class="py-3 italic">No hay información</td>
        </tr>
        @endforelse
      </tbody>
    </table>
    {!! $data->render() !!}
    </form>
  </div>


</x-app-layout>
