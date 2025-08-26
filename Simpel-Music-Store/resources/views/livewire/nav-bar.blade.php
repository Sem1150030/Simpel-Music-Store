<header class="bg-[#0F0F0F] fixed top-0 left-0 w-full shadow z-50 ">
<nav class=" items-center justify-between flex-wrap p-5 sm:p-6 lg:px-8" aria-label="Global">
    <div class="flex">
  <!-- Left: Logo -->
  <div class="flex flex-1">
    <a href="/" class="-m-1.5 p-1.5 text-m/6 font-semibold text-[#F4D468]">
      <span class="sr-only">Your Company</span>
      <h1 class="kaushan-script-regular text-2xl sm:text-3xl">Vinyl Star</h1>
    </a>
  </div>

  <!-- Middle: Search bar (hidden on small, flex on lg) -->
  <div class="flex flex-1 justify-center">
    <div class="w-full max-w-md">
      <div class="flex rounded-md bg-[#282525] outline outline-1 -outline-offset-1 outline-[#FCD88C] focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-[#f1cd7e]">
        <form class="w-full" action="{{ route('search.index') }}" method="GET">
            <input type="text"  name="search" id="search" placeholder="Search album"
                class="block w-full px-2 py-1.5 text-base text-[#FCD88C] placeholder:text-[#dfcba2] placeholder:text-left focus:outline-none" />

        </form>
      </div>
    </div>
  </div>

  <!-- Right: Nav links -->
  <div class=" flex flex-1 justify-end items-center gap-x-8">
    @livewire('shopping-cart-counter')
    @if(!Auth::check())
        <a href="/auth/login" class="text-m/6 font-semibold text-[#F4D468]">Log in <span aria-hidden="true">&rarr;</span></a>
    @endif
    @if (Auth::check())
        <a href="/profile/overview" method="POST" class="text-m/6 font-semibold text-[#F4D468]">Profile<span aria-hidden="true">&rarr;</span></a>
    @endif
  </div>
    </div>

</nav>
<div class=" flex flex-1 w-full justify-center items-center pb-4 gap-10 ">
    <a href="/" class="{{ request()->is('/') ? 'border-b-2' : '' }} hover:border-b-2 text-m/6 font-semibold text-[#F4D468]">New</a>
    <a href="/albums" class="{{ request()->is('albums*') ? 'border-b-2' : '' }} hover:border-b-2 text text-m/6 font-semibold text-[#F4D468]">Albums</a>
    <a wire:click="selectDropdown('new')"

     class="{{ request()->is('artists') ? 'border-b-2' : '' }} cursor-pointer hover:border-b-2 text-m/6 font-semibold text-[#F4D468]">Artists</a>


</div>
 @if ($newDropdown)
 <hr class=" text-[#775d26]">

<div class="mt-2 space-y-2" id="products">
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-[#F4D468] hover:bg-[#443f2c]">Analytics</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-[#F4D468] hover:bg-[#443f2c]">Engagement</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-[#F4D468] hover:bg-[#443f2c]">Security</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-[#F4D468] hover:bg-[#443f2c]">Integrations</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-[#F4D468] hover:bg-[#443f2c]">Automations</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-[#F4D468] hover:bg-[#443f2c]">Watch demo</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-[#F4D468] hover:bg-[#443f2c]">Contact sales</a>
              </div>
    @endif
</header>


