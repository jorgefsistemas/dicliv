<div>
      <table class="table-auto w-full">
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
            <td class="border px-4 py-2">{{ $item->id }}</td>
            <td class="border px-4 py-2">{{ $item->numberSerie }}</td>
            <td class="border px-4 py-2">{{ $item->originVehicle }}</td>
            <td class="border px-4 py-2">{{ $item->curp }}</td>
            <td class="border px-4 py-2">{{ $item->folioOpinion }}</td>

            <td class="border px-4 py-2">
              {{-- <button wire:click="edit({{ $item->id }})" class="px-2 py-1 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">Editar</button> --}}
              {{-- <button wire:click="destroy({{ $item->id }})" class="px-2 py-1 bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">Borrar</button> --}}
              {{-- <form action="{{ route('opinion/',$item->id) }}" method="POST" > --}}
                <form>
                {{-- <form action="{{ route('opinion/26') }}" method="POST" > --}}
                      {{-- <form action="{{ route('opinion/'.$item->id.'/edit',) }}"> --}}


                {{-- <a href="{{ route('opinion.edit',  $item->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>
                    <button type=button class="px-2 py-1 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">Editar</button>

                </a> --}}
                </form>
              {{-- </form method="POST"> --}}
                    {{-- <button  class="px-2 py-1 bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">Borrar</button>  --}}
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


