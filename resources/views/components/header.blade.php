<header class="bg-green-900 text-white flex justify-between px-10 py-5 items-center">
  <div class="text-3xl font-semibold flex-1">RevFo.</div>
  <ul class="flex gap-x-5 font-medium flex-1">
    <li>Home</li>
    <li>About</li>
    <li>Contact</li>
  </ul>

  <div class="flex items-center">
    <form method="get" class="relative">
      <x-forms.input class="text-black" name='search' placeholder='Search..'/>
      <i class="absolute right-2 top-1/2 -translate-y-1/2 text-black fa-solid fa-magnifying-glass"></i>
    </form>
    @auth
    <form action="/logout" method="post">
      @csrf
      <button 
        data-tooltip-target="tooltip-bottom" 
        data-tooltip-placement="bottom" 
        type="submit" 
      >
        <i class="ml-2 text-xl fa-solid fa-right-from-bracket"></i>
      </button>

      <div 
        id="tooltip-bottom" 
        role="tooltip" 
        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
        >
          logout
        <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
    </form>
    @endauth
  </div>
</header>