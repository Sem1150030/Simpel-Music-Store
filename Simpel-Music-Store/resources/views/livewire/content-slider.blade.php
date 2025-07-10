<div>
    <h1 class="text-3xl text-center mb-5 font-bold text-[#F4D468]">Alle artiesten</h1>
    <div class="flex justify-center items-center">
    <form wire:submit.prevent="prevPage">
            <button type="submit" class="text-[#ebeae8] text-6xl text-center mr-4"><</button>
        </form>
    <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 ">



    @foreach ($dataList as $data)

        <div >
            @livewire('card', ['data' => $data])
        </div>

    @endforeach
    <script>
    // Pass PHP dataList as JSON to JS and log it
    const paginatedItems = @json($dataList);
    console.log('Paginated items:', paginatedItems);
</script>
        </div>

        <button wire:click="nextPage" type="submit" class="text-[#ebeae8] text-6xl text-center ml-4">></button>

    </div>


</div>
