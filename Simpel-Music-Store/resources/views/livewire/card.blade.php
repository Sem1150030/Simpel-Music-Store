
<div class="">
    <div class="w-54 h-92 bg-[#161616] border-3 border-[#8D8449]">
        <img src="https://picsum.photos/200?random={{ $data->id }}"
        alt="Album cover"
        class="w-[90%] max-w-xs mx-auto  mt-2">
        <h1 class="mt-2 text-center pl-2 text-[#f8f8ea]">
         {{ $data->name }}
        </h1>

         @if($data->genre?->genre)
            <h1 class="mt-2 text-center pl-2 text-[#f8f8ea]">
                 {{ $data->genre->genre }}
            </h1>
         @endif

    </div>
</div>
