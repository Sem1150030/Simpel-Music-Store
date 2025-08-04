@extends('layouts.app')

@section('content')

    <div class="mt-20 relative w-full">
        <img
            src="{{ asset('Images/VinylPlayer.png') }}"
            alt="Vinyl Player"
            class="w-full h-auto object-cover"
        >
    <div class="absolute top-0 left-0 w-full h-full flex flex-col items-center mt-4 sm:mt-25 space-y-4">
        <h1 class="text-2xl sm:text-4xl kaushan-script-regular font-semibold text-[#F4D468] text-center"> Ontdek het warme geluid van vinyl </h1>
        <h1 class="text-2xl sm:text-4xl kaushan-script-regular font-semibold text-[#F4D468] text-center "> - Vinyl Star </h1>
        <button type="button" class="cursor-pointer rounded-md bg-black px-3.5 py-2.5 sm:px-4.5 sm:py-3.5 text-sm font-semibold border-1 text-[#F4D468] shadow-sm hover:bg-[#1b1b1acc]">Bekijk onze collecties</button>
    </div>
</div>

  @livewire('music-list')
  @livewireScripts

@endsection

