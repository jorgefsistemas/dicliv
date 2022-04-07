<x-app-layout>
    <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Dictamenes') }}
      </h2>
    </x-slot>
    <div class="container-fluid mb-5" style="margin-bottom: 150px !important">
        <div class="row mr-4">
            @foreach ($responseBody as $response)

            <div class="col-xl-3 col-md-6 mb-4 hvr-grow ">
                <a href="{{ $response->html_url }}" class="text-muted">
                    <div class="card shadow  py-0 rounded-lg ">
                        <div class="card-body py-2 px-2">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class=" font-weight-bold mb-4 mt- 2 text-primary text-center text-uppercase mb-1">
                                        {{ $response->name }}
                                    </div>
                                    <div class="h6 mb-0 text-gray-800 text-center">{{ $response->description }}
                                        @if ($response->description == null)
                                        {{ $response->name }}
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div style="position: absolute; bottom: 0" class="mb-2"> <strong>
                                    <hi>Language : {{ $response->language }}
                                </strong></hi>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


  </x-app-layout>
