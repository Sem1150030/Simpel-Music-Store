<section aria-labelledby="trending-heading" >
      <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8 lg:py-32">
        <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
          <h2 id="trending-heading" class="text-2xl font-bold tracking-tight text-[#FCD88C]">Trending products</h2>
          <a href="#" class="hidden text-sm font-semibold text-[#FCD88C] hover:text-[#f9e1ae] sm:block">
            See everything
            <span aria-hidden="true"> &rarr;</span>
          </a>
        </div>

        <div class="relative mt-8">
          <div class="relative w-full overflow-x-auto">
            <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
              @foreach ($trendingAlbums as $album)

              <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                <div class="group relative">
                  <img src="{{ $album->album_img }}" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75" />
                  <div class="mt-3">

                    <h1 class=" text-xl font-semibold text-white">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        {{ $album->name }}
                      </a>
                    </h2>
                    <p class="text-m text-white">{{ $album->artist->name}}</p>
                    <p class="mt-1 text-m text-white">{{$album->price}}</p>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="mt-12 px-4 sm:hidden">
          <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
            See everything
            <span aria-hidden="true"> &rarr;</span>
          </a>
        </div>
      </div>
    </section>
