
<div class="container mx-auto mt-15 mb-10 max-w-3xl">
    <h1 class="text-3xl text-center mb-5 font-bold text-[#F4D468]">Alle Albums</h1>
    <div class="mb-4 space-x-2 rounded-md  p-2">
    @foreach ($albums as $album)
        <div class="border-1 border-yellow-200 pb-5 pt-5 mb-2">
            <h1 class="text-left pl-2 text-[#F4D468]">{{ $album->name }} | {{$album->release_date}}</h1>
        </div>
    @endforeach
    </div>
</div>
