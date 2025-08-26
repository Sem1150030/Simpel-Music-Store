<div>
    <div class="mt-40  text-white">

            @foreach ($orders as $order)
            <div class="mx-auto max-w-4xl py-16 sm:px-6 sm:py-24">
            <div class="border border-[#f8e39d] rounded-lg shadow-lg bg-gray-900 px-4 py-6 sm:p-6 md:flex md:items-center md:justify-between md:space-x-6 lg:space-x-8">
                <dl class="flex-auto divide-y divide-yellow-600 text-sm md:grid md:grid-cols-3 md:gap-x-6 md:divide-y-0 lg:w-1/2 lg:flex-none lg:gap-x-8">
                    <div class="py-2">
                    <dt class="font-medium text-[#F4D468]">Order number</dt>
                    <dd class="md:mt-1">{{$order->id}}</dd>
                    </div>
                    <div class="py-2">
                    <dt class="font-medium text-[#F4D468]">Date placed</dt>
                    <dd class="md:mt-1">{{ $order->created_at->format('F j, Y') }}
</dd>
                    </div>
                    <div class="py-2">
                    <dt class="font-medium text-[#F4D468]">Total amount</dt>
                    <dd class="font-medium md:mt-1">${{round($order->Subtotal + $order->Tax, 2)}}</dd>
                    </div>
                </dl>
                <div class="mt-6 space-y-4 sm:flex sm:space-x-4 sm:space-y-0 md:mt-0">
                    <a href="#" class="flex w-full items-center justify-center rounded-md border border-yellow-500 bg-black px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-yellow-500 hover:text-black transition md:w-auto">
                    View Order
                    </a>
                    <a href="#" class="flex w-full items-center justify-center rounded-md border border-yellow-500 bg-black px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-yellow-500 hover:text-black transition md:w-auto">
                    View Invoice
                    </a>
                </div>
                </div>

                <!-- Products in Order #2 -->
                <div class="mt-6 flow-root px-4 sm:mt-10 sm:px-0">
                <div class="-my-6 divide-y divide-[#c9c9c9] sm:-my-10">
                    @foreach ($order->albums as $album)
                    <!-- Product -->
                    <div class="p-5 flex py-6 sm:py-10 bg-gray-900">
                        <div class="min-w-0 flex-1 lg:flex lg:flex-col">
                            <div class="lg:flex-1">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div>
                                <h4 class="font-medium text-yellow-400">{{$album->name}}</h4>
                                <p class="mt-2 hidden text-sm text-gray-400 sm:block">{{Str::words( $album->description, 20, '...') }}</p>
                                </div>
                                <p class="mt-1 font-medium text-white sm:ml-6 sm:mt-0">${{ round($album->price, 2 )}}</p>
                            </div>
                            <div class="mt-1">
                                <h1>{{$album->pivot->quantity}}</h1>
                            </div>
                            <div class="mt-2 flex text-sm font-medium sm:mt-4">
                                <a href="#" class="text-yellow-400 hover:text-yellow-300">View Product</a>
                                <div class="ml-4 border-l border-yellow-700 pl-4 sm:ml-6 sm:pl-6">
                                <a href="#" class="text-yellow-400 hover:text-yellow-300">Buy Again</a>
                                </div>
                            </div>
                            </div>
                            <div class="mt-6 font-medium">
                            <p class="text-green-500">Purchased</p>
                            </div>
                        </div>
                        <div class="ml-4 shrink-0 sm:order-first sm:m-0 sm:mr-6">
                            <img src="{{ $album->album_img }}" alt="Mini sketchbook set" class="size-20 rounded-lg object-cover sm:size-40 lg:size-52 " />
                        </div>
                    </div>
                    @endforeach

                </div>
                </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
