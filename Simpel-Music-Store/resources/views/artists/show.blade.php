@extends('layouts.app')

@section('content')
    <div class="h-33"></div>
    <div>
        <div class=" w-[60%] flex justify-self-center justify-center">
            <img class="border-2 border-[#342d16] h-full object-cover" src="{{ $artist->bannerIMG }}">
        </div>
        <div class="w-[57%] bg-[#2d2d2d] flex justify-self-center mt-10">
            <div class="w-[20%]">
                <img src="{{ $artist->pfIMG }}">
            </div>
            <div class="mt-3">
                <h1 class="ml-3 text-[#d8c995] text-2xl">Name: {{ $artist->name }}</h1>
                <h1 class="ml-3 text-[#d8c995] text-2xl">Born: {{ $artist->born }}</h1>
                <h1 class="ml-3 text-[#d8c995] text-2xl">Died: {{$artist->died ? $artist->died : '-'  }}</h1>
                <h1 class="ml-3 text-[#d8c995] text-2xl">Genre: {{ $artist->genre }}</h1>
                <h1 class="ml-3 text-[#d8c995] text-2xl">Style: {{ $artist->style }}</h1>
            </div>
        </div>
        <br>


        <div class="w-[57%] bg-[#2d2d2d] flex justify-self-center pb-10 mb-4">
            <div class="w-[97%]">
                <h1 class='ml-10 mr-10 mt-5 mb-3 text-[#d8c995] text-2xl'>Biography</h1>
                <p class="ml-10 mr-10 text-[#d8c995] text-1xl"> {{ $artist->bio }} </p>
            </div>
        </div>
    </div>



@endsection

