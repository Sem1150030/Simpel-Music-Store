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

      {{-- <div class="mx-auto mt-16 w-full max-w-2xl lg:col-span-4 lg:mt-0 lg:max-w-none">
        <el-tab-group>
          <div class="border-b border-gray-200">
            <el-tab-list class="-mb-px flex space-x-8">
              <button id="tab-reviews" class="whitespace-nowrap border-b-2 border-transparent py-6 text-sm font-medium text-gray-700 hover:border-gray-300 hover:text-gray-800 aria-selected:border-indigo-600 aria-selected:text-indigo-600">Customer Reviews</button>
              <button id="tab-faq" class="whitespace-nowrap border-b-2 border-transparent py-6 text-sm font-medium text-gray-700 hover:border-gray-300 hover:text-gray-800 aria-selected:border-indigo-600 aria-selected:text-indigo-600">FAQ</button>
              <button id="tab-license" class="whitespace-nowrap border-b-2 border-transparent py-6 text-sm font-medium text-gray-700 hover:border-gray-300 hover:text-gray-800 aria-selected:border-indigo-600 aria-selected:text-indigo-600">License</button>
            </el-tab-list>
          </div>
          <el-tab-panels>
            <div id="tab-panel-reviews" class="-mb-10">
              <h3 class="sr-only">Customer Reviews</h3>

              <div class="flex space-x-4 text-sm text-gray-500">
                <div class="flex-none py-10">
                  <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-100" />
                </div>
                <div class="flex-1 py-10">
                  <h3 class="font-medium text-gray-900">Emily Selman</h3>
                  <p><time datetime="2021-07-16">July 16, 2021</time></p>

                  <div class="mt-4 flex items-center">
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
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-yellow-400">
                      <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                  </div>
                  <p class="sr-only">5 out of 5 stars</p>

                  <div class="mt-4 text-sm/6 text-gray-500">
                    <p>This icon pack is just what I need for my latest project. There's an icon for just about anything I could ever need. Love the playful look!</p>
                  </div>
                </div>
              </div>
              <div class="flex space-x-4 text-sm text-gray-500">
                <div class="flex-none py-10">
                  <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-100" />
                </div>
                <div class="flex-1 border-t border-gray-200 py-10">
                  <h3 class="font-medium text-gray-900">Hector Gibbons</h3>
                  <p><time datetime="2021-07-12">July 12, 2021</time></p>

                  <div class="mt-4 flex items-center">
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
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-yellow-400">
                      <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                  </div>
                  <p class="sr-only">5 out of 5 stars</p>

                  <div class="mt-4 text-sm/6 text-gray-500">
                    <p>Blown away by how polished this icon pack is. Everything looks so consistent and each SVG is optimized out of the box so I can use it directly with confidence. It would take me several hours to create a single icon this good, so it's a steal at this price.</p>
                  </div>
                </div>
              </div>
              <div class="flex space-x-4 text-sm text-gray-500">
                <div class="flex-none py-10">
                  <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixqx=oilqXxSqey&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-100" />
                </div>
                <div class="flex-1 border-t border-gray-200 py-10">
                  <h3 class="font-medium text-gray-900">Mark Edwards</h3>
                  <p><time datetime="2021-07-06">July 6, 2021</time></p>

                  <div class="mt-4 flex items-center">
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
                  <p class="sr-only">4 out of 5 stars</p>

                  <div class="mt-4 text-sm/6 text-gray-500">
                    <p>Really happy with look and options of these icons. I've found uses for them everywhere in my recent projects. I hope there will be 20px versions in the future!</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="tab-panel-faq" hidden class="text-sm text-gray-500">
              <h3 class="sr-only">Frequently Asked Questions</h3>

              <dl>
                <dt class="mt-10 font-medium text-gray-900">What format are these icons?</dt>
                <dd class="mt-2 text-sm/6 text-gray-500">
                  <p>The icons are in SVG (Scalable Vector Graphic) format. They can be imported into your design tool of choice and used directly in code.</p>
                </dd>
                <dt class="mt-10 font-medium text-gray-900">Can I use the icons at different sizes?</dt>
                <dd class="mt-2 text-sm/6 text-gray-500">
                  <p>Yes. The icons are drawn on a 24 x 24 pixel grid, but the icons can be scaled to different sizes as needed. We don&#039;t recommend going smaller than 20 x 20 or larger than 64 x 64 to retain legibility and visual balance.</p>
                </dd>
                <dt class="mt-10 font-medium text-gray-900">Do I have to add attribution to my projects?</dt>
                <dd class="mt-2 text-sm/6 text-gray-500">
                  <p>No. You are allowed to use these icons freely in your personal and professional work. If you enjoy the icon pack, feel free to tell others!</p>
                </dd>
              </dl>
            </div>

            <div id="tab-panel-license" hidden class="pt-10">
              <h3 class="sr-only">License</h3>

              <div class="text-sm text-gray-500 [&>:first-child]:mt-0 [&_h4]:mt-5 [&_h4]:font-medium [&_h4]:text-gray-900 [&_li::marker]:text-gray-300 [&_li]:pl-2 [&_p]:my-2 [&_p]:text-sm/6 [&_ul]:my-4 [&_ul]:list-disc [&_ul]:space-y-1 [&_ul]:pl-5 [&_ul]:text-sm/6">
                <h4>Overview</h4>

                <p>For personal and professional use. You cannot resell or redistribute these icons in their original or modified state.</p>

                <ul role="list">
                  <li>You're allowed to use the icons in unlimited projects.</li>
                  <li>Attribution is not required to use the icons.</li>
                </ul>

                <h4>What you can do with it</h4>

                <ul role="list">
                  <li>Use them freely in your personal and professional work.</li>
                  <li>Make them your own. Change the colors to suit your project or brand.</li>
                </ul>

                <h4>What you can't do with it</h4>

                <ul role="list">
                  <li>Don't be greedy. Selling or distributing these icons in their original or modified state is prohibited.</li>
                  <li>Don't be evil. These icons cannot be used on websites or applications that promote illegal or immoral beliefs or activities.</li>
                </ul>
              </div>
            </div>
          </el-tab-panels>
        </el-tab-group>
      </div> --}}
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
