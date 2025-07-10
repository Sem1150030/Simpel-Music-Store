@extends('layouts.app')

@section('content')
    @livewire('content-slider', ['data' => $artists])
    {{-- <h1 class="text-3xl text-center mb-5 font-bold text-[#F4D468]">Alle artiesten</h1>
    <div class="flex justify-center">
    <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
    @foreach ($artists as $artist)

        <div class"">
            @livewire('card', ['data' => $artist])
        </div>

    @endforeach
        </div>

    </div> --}}
@endsection
