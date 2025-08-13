
<div class="">
    <div class="relativew-54 h-92 bg-[#161616] border-3 border-[#8D8449]">
        @if($data->pfIMG)
            <img src="{{ $data->pfIMG }}"

            class="w-[90%] max-w-xs mx-auto  mt-2">
        @endif
        @if($data->pfIMG)
            <img src="{{ $data->album_img }}"

            class="w-[90%] max-w-xs mx-auto  mt-2">
        @endif


        <h1 class="mt-2 text-center pl-2 text-[#f8f8ea]">
         {{ $data->name }}
        </h1>

       @if(empty($data->bio))
            <h1 class="mt-2 text-center pl-2 text-[#f8f8ea]">
                 {{ $data->genre->genre }}
            </h1>
         @endif

        <div class="flex justify-center h-auto bottom-0">
            <form action="{{ route('album.show', ['id' => $data->id]  ) }}" method="GET">
                <button type="sumbit"  class="cursor-pointer mt-auto text-[#ebd58d] rounded-md bg-[#161616] px-3.5 py-2 ring-1 ring-inset ring-[#8D8449] hover:bg-[#1d1b1b]">Click Me</button>
            </form>
            </div>
    </div>


</div>
