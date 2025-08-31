<main class="mx-auto px-4 pb-24 pt-14 sm:px-6 sm:pb-32 sm:pt-16 lg:max-w-7xl lg:px-8">
    <!-- Product -->
    <div class="lg:grid lg:grid-cols-7 lg:grid-rows-1 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16">
      <!-- Product image -->
      <div class="lg:col-span-4 lg:row-end-1">
        <img src="{{ $album->album_img }}"
        alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles."
        class="aspect-square w-full rounded-lg bg-gray-100 object-cover" />
        </div>

      <!-- Product details -->
      <div class="mx-auto mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-none">
        <div class="flex flex-col-reverse">
          <div class="mt-4">
            <h1 class="text-2xl font-bold tracking-tight textst sm:text-3xl">{{$album->name}} - (LP)</h1>

            <h2 id="information-heading" class="sr-only">Product information</h2>
            <p class="mt-2 text-xl font-semibold text-gray-200">{{ $album->artist->name}}</p>
            <p class="mt-2 text-sm text-gray-400">Released at {{ \Carbon\Carbon::parse($album->release_date)->format('Y-m-d') }}
</p>
          </div>

          <div>
            <h3 class="sr-only">Reviews</h3>
            <div class="flex items-center">
              <!-- Active: "text-yellow-400", Default: "text-gray-300" -->
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-yellow-400">
                <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-yellow-400">
                <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-yellow-400">
                <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-yellow-400">
                <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-300">
                <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
            </div>
            <p class="sr-only">3 out of 5 stars</p>
          </div>
        </div>

        <div>
            <p class="mt-6 text-white">
                {{ $expanded ? $description : \Illuminate\Support\Str::limit($description, $limit) }}
            </p>

            @if (strlen($description) > $limit)
                <button wire:click="toggle" class="cursor-pointer mt-2 text-sm text-blue-400 hover:underline">
                    {{ $expanded ? 'See less' : 'See more' }}
                </button>
            @endif
        </div>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
          <button type="button" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Pay $220</button>
          <button type="button" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-50 px-8 py-3 text-base font-medium text-indigo-700 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Preview</button>
        </div>

        <div class="mt-10 border-t border-gray-200 pt-10">
          <h3 class="text-sm font-medium text-gray-200">Songs</h3>
          <div class="mt-4">
            <ul role="list" class="list-disc space-y-1 pl-5 text-sm/6 text-gray-400 marker:text-gray-300">
                @foreach ($album->musics as $song)
                    <li class="pl-2">{{$song->name}}</li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
      @livewire('products.album-reviews', ['album' => $album])
    </div>

    <!-- Related products -->
    {{-- <div class="mx-auto mt-24 max-w-2xl sm:mt-32 lg:max-w-none">
      <div class="flex items-center justify-between space-x-4">
        <h2 class="text-lg font-medium text-gray-900">Customers also viewed</h2>
        <a href="#" class="whitespace-nowrap text-sm font-medium text-indigo-600 hover:text-indigo-500">
          View all
          <span aria-hidden="true"> &rarr;</span>
        </a>
      </div>
      <div class="mt-6 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
        <div class="group relative">
          <div class="relative">
            <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-05-related-product-01.jpg" alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background." class="aspect-[4/3] w-full rounded-lg bg-gray-100 object-cover" />
            <div aria-hidden="true" class="absolute inset-0 flex items-end p-4 opacity-0 group-hover:opacity-100">
              <div class="w-full rounded-md bg-white/75 px-4 py-2 text-center text-sm font-medium text-gray-900 backdrop-blur backdrop-filter">View Product</div>
            </div>
          </div>
          <div class="mt-4 flex items-center justify-between space-x-8 text-base font-medium text-gray-900">
            <h3>
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Fusion
              </a>
            </h3>
            <p>$49</p>
          </div>
          <p class="mt-1 text-sm text-gray-500">UI Kit</p>
        </div>
        <div class="group relative">
          <div class="relative">
            <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-05-related-product-02.jpg" alt="Calendar user interface screenshot with icon buttons and orange-yellow theme." class="aspect-[4/3] w-full rounded-lg bg-gray-100 object-cover" />
            <div aria-hidden="true" class="absolute inset-0 flex items-end p-4 opacity-0 group-hover:opacity-100">
              <div class="w-full rounded-md bg-white/75 px-4 py-2 text-center text-sm font-medium text-gray-900 backdrop-blur backdrop-filter">View Product</div>
            </div>
          </div>
          <div class="mt-4 flex items-center justify-between space-x-8 text-base font-medium text-gray-900">
            <h3>
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Marketing Icon Pack
              </a>
            </h3>
            <p>$19</p>
          </div>
          <p class="mt-1 text-sm text-gray-500">Icons</p>
        </div>
        <div class="group relative">
          <div class="relative">
            <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-05-related-product-03.jpg" alt="Pricing page screenshot with tiered plan options and comparison table on colorful blue and green background." class="aspect-[4/3] w-full rounded-lg bg-gray-100 object-cover" />
            <div aria-hidden="true" class="absolute inset-0 flex items-end p-4 opacity-0 group-hover:opacity-100">
              <div class="w-full rounded-md bg-white/75 px-4 py-2 text-center text-sm font-medium text-gray-900 backdrop-blur backdrop-filter">View Product</div>
            </div>
          </div>
          <div class="mt-4 flex items-center justify-between space-x-8 text-base font-medium text-gray-900">
            <h3>
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Scaffold
              </a>
            </h3>
            <p>$29</p>
          </div>
          <p class="mt-1 text-sm text-gray-500">Wireframe Kit</p>
        </div>
        <div class="group relative">
          <div class="relative">
            <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-05-related-product-04.jpg" alt="Application screenshot with tiered navigation and account settings form on color red and purple background." class="aspect-[4/3] w-full rounded-lg bg-gray-100 object-cover" />
            <div aria-hidden="true" class="absolute inset-0 flex items-end p-4 opacity-0 group-hover:opacity-100">
              <div class="w-full rounded-md bg-white/75 px-4 py-2 text-center text-sm font-medium text-gray-900 backdrop-blur backdrop-filter">View Product</div>
            </div>
          </div>
          <div class="mt-4 flex items-center justify-between space-x-8 text-base font-medium text-gray-900">
            <h3>
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Bones
              </a>
            </h3>
            <p>$29</p>
          </div>
          <p class="mt-1 text-sm text-gray-500">Wireframe Kit</p>
        </div>
      </div>
    </div> --}}
  </main>
