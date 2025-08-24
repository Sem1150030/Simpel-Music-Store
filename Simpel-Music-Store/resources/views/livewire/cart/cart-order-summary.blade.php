<section aria-labelledby="summary-heading" class="mt-16 rounded-lg bg-[#242424] px-4 py-6 sm:p-6 lg:col-span-5 lg:mt-0 lg:p-8">
        <h2 id="summary-heading" class="text-xl font-medium text-[#F4D468]">Order summary</h2>

        <dl class="mt-6 space-y-4">
          <div class="flex items-center justify-between">
            <dt class="text-sm text-[#dfdfdf]">Subtotal</dt>
            <dd class="text-sm font-medium text-[#dfdfdf]">${{$totalCostBT}}</dd>
          </div>
          <div class="flex items-center justify-between border-t border-gray-200 pt-4">
            <dt class="flex items-center text-sm text-[#dfdfdf]">
              <span>Shipping estimate</span>
              <a href="#" class="ml-2 shrink-0 text-[#dfdfdf] hover:text-gray-500">
                <span class="sr-only">Learn more about how shipping is calculated</span>
                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5">
                  <path d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0ZM8.94 6.94a.75.75 0 1 1-1.061-1.061 3 3 0 1 1 2.871 5.026v.345a.75.75 0 0 1-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 1 0 8.94 6.94ZM10 15a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" fill-rule="evenodd" />
                </svg>
              </a>
            </dt>
            <dd class="text-sm font-medium text-[#dfdfdf]">${{$shippingCost}}</dd>
          </div>
          <div class="flex items-center justify-between border-t border-gray-200 pt-4">
            <dt class="flex text-sm text-[#dfdfdf]">
              <span>Tax estimate</span>
              <a href="#" class="ml-2 shrink-0 text-[#dfdfdf] hover:text-gray-500">
                <span class="sr-only">Learn more about how tax is calculated</span>
                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5">
                  <path d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0ZM8.94 6.94a.75.75 0 1 1-1.061-1.061 3 3 0 1 1 2.871 5.026v.345a.75.75 0 0 1-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 1 0 8.94 6.94ZM10 15a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" fill-rule="evenodd" />
                </svg>
              </a>
            </dt>
            <dd class="text-sm font-medium text-[#dfdfdf]">${{$totalTaxCost}}</dd>
          </div>
          <div class="flex items-center justify-between border-t border-gray-200 pt-4">
            <dt class="text-base font-medium text-[#F4D468]">Order total</dt>
            <dd class="text-base font-medium text-[#F4D468]">${{ $totalCost }}</dd>
          </div>
        </dl>

        <div class="mt-6">
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                @method('POST')
                <input type="hidden" name="cart" value="{{ json_encode($cart) }}">
                <button
                    type="submit"
                    class="t w-full rounded-md border border-transparent px-4 py-3 text-base font-bold text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50
                        {{ $totalCost <= 0 ? 'bg-[#facd5c] cursor-not-allowed opacity-70 text-[#c6c6c6]'  : 'bg-[#f1cd57] cursor-pointer hover:bg-[#d3b66c]' }}"
                    {{ $totalCost <= 0 ? 'disabled' : '' }}>
                    Checkout
                </button>
            </form>
        </div>
      </section>
