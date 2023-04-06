<nav x-data="{ open: false }" class="bg-white border-t border-gray-100">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <!-- Logo -->
        <div class=" flex-shrink-0 flex items-center ">
          <a href="{{ route('user.dashboard') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
          </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
          <x-nav-link :href="route('user.schedule.index')" :active="request()->routeIs('user.schedule.index')">
            {{ __('旅行スケジュール') }}
          </x-nav-link>
          <x-nav-link :href="route('user.client.index')" :active="request()->routeIs('user.client.index')">
            {{ ('患者情報') }}
          </x-nav-link>
          <x-nav-link :href="route('user.treatment.index')" :active="request()->routeIs('user.treatment.index')">
            {{ __('処置情報') }}
          </x-nav-link>
          <x-nav-link :href="route('user.emergency.index')" :active="request()->routeIs('user.emergency.index')">
            {{ ('緊急連絡先') }}
          </x-nav-link>
        </div>
      </div>

      <!-- Settings Dropdown -->
      <div class="hidden sm:flex sm:items-center sm:ml-6">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
              <div>{{ Auth::user()->name }}</div>

              <div class="ml-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </button>
          </x-slot>

          <x-slot name="content">
            <!-- Authentication -->
            <form method="POST" action="{{ route('user.logout') }}">
              @csrf

              <x-dropdown-link :href="route('user.logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log out') }}
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>


      <!-- Hamburger -->
      <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-b border-gray-200">
      <div class="flex items-center px-4">
        <div class="flex-shrink-0">
          <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
        </div>

        <div class="ml-3">
          <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
          <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        </div>
      </div>

      <div class="mt-3 space-y-1 ">
        <!-- Authentication -->
        <form method="POST" action="{{ route('user.logout') }}">
          @csrf

          <x-responsive-nav-link :href="route('user.logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
</nav>


<nav x-data="{ open: false }" class="pl-4 pr-4 bg-white border-t border-gray-100 fixed bottom-0 w-screen z-50">

  <div class="sm:hidden">
    <div class="space-y-1 flex">
      <x-responsive-nav-link :href="route('user.schedule.index')" :active="request()->routeIs('user.dschedule.index')">
        <div class="flex flex-col">
          <div class='mx-auto mb-2'>
            <p class="w-5 h-5 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M221.2 13.3C230.8 5.7 242.6 0 256 0c26.9 0 47.1 21.6 59.2 41.8C327.9 62.9 336 89.1 336 109.7v52.5l151.8 86.8c15 8.5 24.2 24.5 24.2 41.7v56.2c0 21.3-20.3 36.6-40.8 30.8L336 338.9V376l51.2 38.4c8.1 6 12.8 15.5 12.8 25.6v42c0 16.6-13.4 30-30 30c-2.8 0-5.6-.4-8.2-1.2l0 0L256 480.6 150.3 510.8l0 0c-2.7 .8-5.5 1.2-8.3 1.2c-16.6 0-30-13.4-30-30V440c0-10.1 4.7-19.6 12.8-25.6L176 376l0-37.1L40.8 377.6C20.3 383.4 0 368 0 346.8V290.6c0-17.2 9.2-33.1 24.2-41.7L176 162.1V109.7c0-20.7 8.4-46.9 21.2-67.9c6.5-10.7 14.5-20.8 24-28.4zm3.3 45C214.1 75.6 208 96.2 208 109.7v61.7c0 5.7-3.1 11-8.1 13.9L40.1 276.7c-5 2.8-8.1 8.2-8.1 13.9v56.2l155.6-44.5c4.8-1.4 10-.4 14 2.6s6.4 7.8 6.4 12.8l0 66.3c0 5-2.4 9.8-6.4 12.8L144 440v39.4l107.6-30.7c2.9-.8 5.9-.8 8.8 0L368 479.4V440l-57.6-43.2c-4-3-6.4-7.8-6.4-12.8V317.7c0-5 2.4-9.8 6.4-12.8s9.2-4 14-2.6L480 346.8V290.6c0-5.7-3.1-11-8.1-13.9L312.1 185.3c-5-2.8-8.1-8.2-8.1-13.9V109.7c0-13.6-5.9-34.2-16.2-51.4C276.9 40.2 265.1 32 256 32c-4.1 0-9 1.7-14.8 6.3c-5.8 4.6-11.5 11.5-16.7 20z"/></svg></p>
          </div>
          <p>{{ __('旅行スケジュール') }}</p>
        </div>
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('user.client.index')" :active="request()->routeIs('user.client.index')">
        <div class="flex flex-col">
          <div class='mx-auto mb-2'>
            <p class="w-4 h-4 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg></p>
          </div>
          <p>{{ __('患者管理') }}</p>
        </div>
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('user.treatment.index')" :active="request()->routeIs('user.treatment.index')">
        <div class="flex flex-col">
          <div class='mx-auto mb-2'>
            <p class="w-5 h-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M132.6 33.4l-15 5.6L64 59.1V192c0 70.7 57.3 128 128 128s128-57.3 128-128V59.1L266.4 39l-15-5.6 11.2-30 15 5.6 64 24L352 36.9V48 192c0 83-63.1 151.2-144 159.2v.8c0 70.7 57.3 128 128 128s128-57.3 128-128V254c-27.6-7.1-48-32.2-48-62c0-35.3 28.7-64 64-64s64 28.7 64 64c0 29.8-20.4 54.9-48 62v98c0 88.4-71.6 160-160 160s-160-71.6-160-160v-.8C95.1 343.2 32 275 32 192V48 36.9L42.4 33l64-24 15-5.6 11.2 30zM480 224a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg></p>
          </div>
          <p>{{ __('処置') }}</p>
        </div>
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('user.emergency.index')" :active="request()->routeIs('user.emergency.index')">
        <div class="flex flex-col">
          <div class='mx-auto mb-2'>
            <p class="w-4 h-4 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"/></svg></p>
          </div>
          <p>{{ __('緊急連絡先') }}</p>
        </div>
      </x-responsive-nav-link>
    </div>
  </div>
</nav>
