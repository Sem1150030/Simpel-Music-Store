<div class="">
        <h1 class="text-3xl text-center mb-5 font-bold text-[#F4D468] mt-28  ">Artiesten</h1>
    <div class="relative flex items-center gap-2 overflow-x-scroll whitespace-nowrap scroll-smooth">
    @foreach ($data as $item)
            @livewire('card', ['data' => $item])
    @endforeach
    </div>
</div>
