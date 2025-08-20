<div class=" mt-25 ">
  <div class=" bg-[#313131] mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 lg:max-w-7xl lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Shopping Cart</h1>
    <div  class="mt-12 lg:grid lg:grid-cols-12 lg:items-start lg:gap-x-12 xl:gap-x-16">
        @csrf
      <section aria-labelledby="cart-heading" class="lg:col-span-7">
        <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
        <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
            @foreach ($cart as $item)
                @livewire('shopping-cart-item', ['item' => $item])
            @endforeach
        </ul>
        </section>

        @livewire('cart.cart-order-summary', ['cart' => $cart ])
    </div>
  </div>
</div>
