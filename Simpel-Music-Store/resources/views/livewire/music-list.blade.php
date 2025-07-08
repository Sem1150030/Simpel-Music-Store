
<div>
    <h1 class="text-3xl text-center mb-5 font-bold">Alle artiesten</h1>
    <div class="mb-4 space-x-2 rounded-md  p-2">
    @foreach ($artists as $artist)
        <div class="border-1 border-slate-400 pb-5 pt-5 mb-2">
            <h1 class="text-left pl-2">{{ $artist->name }} </h1>
        </div>
    @endforeach
    </div>
</div>
