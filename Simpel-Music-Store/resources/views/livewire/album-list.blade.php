
<div class="container mx-auto mt-45 mb-10 max-w-3xl">
    <h1 class="text-3xl text-center mb-5 font-bold text-[#F4D468]">Alle Albums</h1>
    <div class="flex justify-center">
    <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($albums as $album)

        <div class"">
            @livewire('card', ['data' => $album])
        </div>

    @endforeach
        </div>

    </div>
</div>
