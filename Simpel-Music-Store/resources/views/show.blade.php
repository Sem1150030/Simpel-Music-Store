@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-45 mb-10 max-w-6xl">
    <h1 class="text-3xl  text-center mb-1 font-bold text-[#F4D468]">Zoek resultaten voor:</h1>
    <h1 class="text-xl text-center mb-5 font-bold text-[#eedda3]">{{Request('search')}}</h1>
    <div class="flex justify-center">
    @if (count($albums) > 0)
    <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">



    @foreach ($albums as $album)

        <div>
            @livewire('card', ['data' => $album])
        </div>

    @endforeach
    @else
        <div class="flex justify-center items-center text-center">
            <h1 class="text-xl text-center mb-1 font-bold text-[#eedda3]">Er zijn geen albums gevonden</h1>
        </div>
    @endif
    </div>


    </div>

</div>
<div class="flex justify-center items-center">
{{ $albums->links() }}
</div class="pb-4">
@endsection
