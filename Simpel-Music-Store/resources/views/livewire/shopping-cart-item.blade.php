<div >


    <li class="flex py-6 sm:py-10">
            <div class="shrink-0">
              <img src="{{ $item->album_img }}" alt="Front of men&#039;s Basic Tee in sienna." class="size-24 rounded-md object-cover sm:size-48" />
            </div>

            <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
              <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                <div>
                  <div class="flex justify-between">
                    <h3 class="text-sm">
                      <a href="#" class="font-medium text-white hover:text-[#eae3e3]">{{$item->name}}</a>
                    </h3>
                  </div>
                  <div class="mt-1 flex text-sm">
                    <p class="text-gray-100">{{$item->artist->name}}</p>
                    <p class="ml-4 border-l border-gray-200 pl-4 text-white">{{$item->genre->genre}}</p>
                  </div>
                  <p class="mt-1 text-sm font-medium text-white">${{$item->price}}</p>
                </div>

                <div class="mt-4 sm:mt-0 sm:pr-9">
                  <div class="grid w-full max-w-20 grid-cols-1">
                    <input
                        type="number"
                        wire:model.live="quantity"
                        min="0"
                        aria-label="Quantity, Basic Tee"
                        class="col-start-1 row-start-1 rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900  outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                    />

                  </div>

                  <div class="absolute right-0 top-0">
                    <button type="button" class="-m-2 inline-flex p-2 text-white hover:text-[#f5ecec]">
                      <span class="sr-only">Remove</span>
                      <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5">
                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>


</div>
