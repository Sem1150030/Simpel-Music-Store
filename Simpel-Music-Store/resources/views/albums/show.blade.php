@extends('layouts.app')

@section('content')

    <div class="m-auto w-300 h-80  bg-amber-50 mt-35 flex">
        <div class=" " >
            <img src="https://picsum.photos/200?random={{ $album->id }}"
                    alt="Album cover"
                    class="w-[90%] h-[90%] max-w-xs  ml-4 mt-2">
        </div>

        <div class="mt-2">
            <h1> Author: {{$album->artist->name}}</h1>
            <h1> Genre: {{$album->genre->genre}}</h1>
            <h1> Name: {{$album->name}}</h1>
        </div>
    </div>

    <div class="m-auto w-300  pb-2 bg-amber-50 mt-5 flex">
        <h1>Songs</h1> <br>
            @foreach ($album->musics as $music)
             {{ $loop->index + 1 }}: {{ $music->name }} - {{ $music->duraction_sec }} <br>
            @endforeach
    </div>

    <div class="m-auto w-300 pb-2  bg-amber-50 mt-5 flex">
            @foreach ($album->reviews as $review)
               Comment: {{ $review->comment }} - {{ $review->rating }} <br>
            @endforeach
    </div>
@endsection
