<nav x-data="{ open: false }" class="bg-white border-t border-gray-100 fixed bottom-0 w-screen z-50">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between mt-2 mb-2">
      <div class="flex">
        <!-- Logo -->
        <div class="hidden flex-shrink-0 flex items-center sm:flex">
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
      <div class="-mr-2 items-center sm:hidden">
        <div class="mr-20 space-y-1 flex w-11/12">
          <x-responsive-nav-link :href="route('user.schedule.index')" :active="request()->routeIs('user.dschedule.index')">
            <div class="flex flex-col">
              <div class='mx-auto mb-2'>
                <p class="w-5 h-5 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM43.3 480H404.7L360.4 336H87.6L43.3 480zM64 304H384l54.2 176 9.8 32H414.5 33.5 0l9.8-32L64 304z"/></svg></p>
              </div>
              <p>{{ __('旅行スケジュール') }}</p>
            </div>
          </x-responsive-nav-link>
          <x-responsive-nav-link :href="route('user.client.index')" :active="request()->routeIs('user.client.index')">
            <div class="flex flex-col">
              <div class='mx-auto mb-2'>
                <p class="w-5 h-5 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM43.3 480H404.7L360.4 336H87.6L43.3 480zM64 304H384l54.2 176 9.8 32H414.5 33.5 0l9.8-32L64 304z"/></svg></p>
              </div>
              <p>{{ __('患者管理') }}</p>
            </div>
          </x-responsive-nav-link>
          <x-responsive-nav-link :href="route('user.treatment.index')" :active="request()->routeIs('user.treatment.index')">
            <div class="flex flex-col">
              <div class='mx-auto mb-2'>
                <p class="w-5 h-5 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM43.3 480H404.7L360.4 336H87.6L43.3 480zM64 304H384l54.2 176 9.8 32H414.5 33.5 0l9.8-32L64 304z"/></svg></p>
              </div>
              <p>{{ __('処置') }}</p>
            </div>
          </x-responsive-nav-link>
          <x-responsive-nav-link :href="route('user.emergency.index')" :active="request()->routeIs('user.emergency.index')">
            <div class="flex flex-col">
              <div class='mx-auto mb-2'>
                <p class="w-5 h-5 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM43.3 480H404.7L360.4 336H87.6L43.3 480zM64 304H384l54.2 176 9.8 32H414.5 33.5 0l9.8-32L64 304z"/></svg></p>
              </div>
              <p>{{ __('緊急連絡先') }}</p>
            </div>
          </x-responsive-nav-link>
        </div>
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
    <div class="pt-4 pb-1 border-t border-gray-200">
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

      <div class="mt-3 space-y-1">
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
