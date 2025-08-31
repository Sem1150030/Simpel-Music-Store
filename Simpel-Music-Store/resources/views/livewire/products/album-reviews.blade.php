<div class="mx-auto mt-16 w-full max-w-2xl lg:col-span-4 lg:mt-0 lg:max-w-none">
        <el-tab-group>
          <div class="border-b border-gray-200">
            <el-tab-list class="-mb-px flex space-x-8">
              <button id="tab-reviews" class="whitespace-nowrap border-b-2 border-transparent py-6 text-sm font-medium text-gray-200 hover:border-gray-200 hover:text-gray-200 aria-selected:border-indigo-600 aria-selected:text-indigo-600">Customer Reviews</button>

          </div>
          <el-tab-panels>
            <div id="tab-panel-reviews" class="-mb-10">
              <h3 class="sr-only">Customer Reviews</h3>
              @foreach ($album->reviews as $review)

              {{-- {{ dump(User::where('id', $review->user_id)->name) }} --}}


              <div class="flex space-x-4 text-sm text-gray-500">
                <div class="flex-none py-10">
                  <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-100" />
                </div>
                <div class="flex-1 py-10">
                  <h3 class="font-medium text-gray-200">{{$review->user->name}}</h3>
                  <p><time datetime="2021-07-16">{{($review->created_at)}}</time></p>

                  <div class="mt-4 flex items-center">
                    @for ($i = 0; $i < (int)$review->rating; $i++)

                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-yellow-400">
                      <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                    @endfor
                    @for ($i; $i <= 4; $i++)
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-400">
                      <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                    @endfor

                  </div>
                  <p class="sr-only">5 out of 5 stars</p>

                  <div class="mt-4 text-sm/6 text-gray-300">
                    <p>{{$review->comment}}</p>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </el-tab-panels>
        </el-tab-group>
      </div>
