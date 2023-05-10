<nav x-data="{ open: false }" class="bg-white border-t border-gray-100 nav">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-10 lg:px-8">
    <div class="flex justify-between h-20">
      <div class="flex">
        <!-- Logo -->
        <div class=" flex-shrink-0 flex items-center ">
          <a href="{{ route('user.dashboard') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
          </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-6 sm:-my-px sm:ml-10 lg:flex text-sm">
          <x-nav-link :href="route('user.schedule.index')" :active="request()->routeIs('user.schedule.index')">
            {{ __('旅行スケジュール') }}
          </x-nav-link>
          <x-nav-link :href="route('user.map.index')" :active="request()->routeIs('user.map.index')">
            {{ __('地図') }}
          </x-nav-link>
          <x-nav-link :href="route('user.client.index')" :active="request()->routeIs('user.client.index')">
            {{ '患者情報' }}
          </x-nav-link>
          <x-nav-link :href="route('user.treatment.index')" :active="request()->routeIs('user.treatment.index')">
            {{ __('処置情報') }}
          </x-nav-link>
          <x-nav-link :href="route('user.emergency.index')" :active="request()->routeIs('user.emergency.index')">
            {{ '緊急連絡先' }}
          </x-nav-link>
        </div>
      </div>

      <!-- Settings Dropdown -->
      <div class="hidden sm:flex sm:items-center sm:ml-6">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button
              class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
              <div>{{ Auth::user()->name }}</div>

              <div class="ml-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </button>
          </x-slot>

          <x-slot name="content">
            <!-- Authentication -->
            <form method="POST" action="{{ route('user.logout') }}">
              @csrf

              <x-dropdown-link :href="route('user.logout')"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log out') }}
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>


      <!-- Hamburger -->
      <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open"
          class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-b border-gray-200">
      <div class="flex items-center px-4">
        <div class="flex-shrink-0">
          <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
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

          <x-responsive-nav-link :href="route('user.logout')"
            onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
</nav>


<nav x-data="{ open: false }" class="pl-4 pr-4 bg-white  fixed bottom-0 w-screen z-50">

  <div class="lg:hidden">
    <div class="space-y-1 flex">
      <x-responsive-nav-link :href="route('user.schedule.index')" :active="request()->routeIs('user.schedule.index')">
        <div class="flex flex-col">
          <div class='mx-auto -2'>
            @if (request()->routeIs('user.schedule.index') ||
                    request()->routeIs('user.schedule.show') ||
                    request()->routeIs('user.treatment.show') ||
                    request()->routeIs('user.destination.show'))
              <!-- Active Icon SVG here -->
              <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5.35714 1.75V3.5H2.67857C1.19978 3.5 0 4.67578 0 6.125V8.75H25V6.125C25 4.67578 23.8002 3.5 22.3214 3.5H19.6429V1.75C19.6429 0.782031 18.8449 0 17.8571 0C16.8694 0 16.0714 0.782031 16.0714 1.75V3.5H8.92857V1.75C8.92857 0.782031 8.13058 0 7.14286 0C6.15513 0 5.35714 0.782031 5.35714 1.75ZM25 10.5H0V25.375C0 26.8242 1.19978 28 2.67857 28H22.3214C23.8002 28 25 26.8242 25 25.375V10.5Z"
                  fill="#FFD643" />
              </svg>
            @else
              <!-- Inactive Icon SVG here -->
              <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M6.25 0C6.74107 0 7.14286 0.39375 7.14286 0.875V3.5H17.8571V0.875C17.8571 0.39375 18.2589 0 18.75 0C19.2411 0 19.6429 0.39375 19.6429 0.875V3.5H21.4286C23.3984 3.5 25 5.06953 25 7V8.75V10.5V24.5C25 26.4305 23.3984 28 21.4286 28H3.57143C1.60156 28 0 26.4305 0 24.5V10.5V8.75V7C0 5.06953 1.60156 3.5 3.57143 3.5H5.35714V0.875C5.35714 0.39375 5.75893 0 6.25 0ZM23.2143 10.5H1.78571V24.5C1.78571 25.468 2.58371 26.25 3.57143 26.25H21.4286C22.4163 26.25 23.2143 25.468 23.2143 24.5V10.5ZM21.4286 5.25H3.57143C2.58371 5.25 1.78571 6.03203 1.78571 7V8.75H23.2143V7C23.2143 6.03203 22.4163 5.25 21.4286 5.25Z"
                  fill="#A0A0A0" />
              </svg>
            @endif
          </div>
          {{-- <p>{{ __('旅行スケジュール') }}</p> --}}
        </div>
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('user.map.index')" :active="request()->routeIs('user.map.index')">
        <div class="flex flex-col">
          <div class='mx-auto'>
            @if (request()->routeIs('user.map.index'))
              <!-- Active Icon SVG here -->
              <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M18.6667 21.9931L9.33333 19.2511V0.0069072L18.6667 2.74894V21.9931ZM20.2222 21.9332V2.62907L26.4007 0.0868206C27.1687 -0.227839 28 0.351534 28 1.20061V17.9225C28 18.412 27.7083 18.8515 27.266 19.0363L20.2222 21.9282V21.9332ZM0.734028 2.9637L7.77778 0.0718368V19.3709L1.59931 21.9132C0.83125 22.2278 0 21.6485 0 20.7994V4.0775C0 3.58803 0.291667 3.1485 0.734028 2.9637Z"
                  fill="#FFD643" />
              </svg>
            @else
              <!-- Inactive Icon SVG here -->
              <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.26875 0.0556023C8.42917 -0.00822774 8.60417 -0.0180477 8.76944 0.0310523L19.4007 3.0998L26.4007 0.271643C27.1687 -0.0376877 28 0.531873 28 1.36657V17.8053C28 18.2864 27.7083 18.7185 27.266 18.9002L19.7313 21.9444C19.5708 22.0082 19.3958 22.018 19.2306 21.9689L8.59931 18.9002L1.59931 21.7284C0.83125 22.0377 0 21.4681 0 20.6334V4.19474C0 3.71356 0.291667 3.28147 0.734028 3.0998L8.26875 0.0556023ZM1.55556 4.45988V20.054L7.77778 17.5401V1.94595L1.55556 4.45988ZM18.6667 20.1719V4.52371L9.33333 1.82811V17.4763L18.6667 20.1719ZM20.2222 20.054L26.4444 17.5401V1.94595L20.2222 4.45988V20.054Z"
                  fill="#A0A0A0" />
              </svg>
            @endif
          </div>
          {{-- <p>{{ __('地図') }}</p> --}}
        </div>
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('user.client.index')" :active="request()->routeIs('user.client.index')">
        <div class="flex flex-col">
          <div class='mx-auto'>
            @if (request()->routeIs('user.client.index'))
              <!-- Active Icon SVG here -->
              <svg width="23" height="26" viewBox="0 0 23 26" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.5 13C13.2429 13 14.9143 12.3152 16.1467 11.0962C17.3791 9.87721 18.0714 8.22391 18.0714 6.5C18.0714 4.77609 17.3791 3.12279 16.1467 1.90381C14.9143 0.68482 13.2429 0 11.5 0C9.75715 0 8.08568 0.68482 6.8533 1.90381C5.62092 3.12279 4.92857 4.77609 4.92857 6.5C4.92857 8.22391 5.62092 9.87721 6.8533 11.0962C8.08568 12.3152 9.75715 13 11.5 13ZM9.1538 15.4375C4.09688 15.4375 0 19.4898 0 24.4918C0 25.3246 0.682813 26 1.52478 26H21.4752C22.3172 26 23 25.3246 23 24.4918C23 19.4898 18.9031 15.4375 13.8462 15.4375H9.1538Z"
                  fill="#FFD643" />
              </svg>
            @else
              <!-- Inactive Icon SVG here -->
              <svg width="23" height="26" viewBox="0 0 23 26" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16.4286 6.5C16.4286 5.85981 16.3011 5.22588 16.0534 4.63442C15.8057 4.04296 15.4427 3.50554 14.985 3.05285C14.5274 2.60017 13.984 2.24108 13.3861 1.99609C12.7881 1.7511 12.1472 1.625 11.5 1.625C10.8528 1.625 10.2119 1.7511 9.61392 1.99609C9.01596 2.24108 8.47263 2.60017 8.01497 3.05285C7.55731 3.50554 7.19428 4.04296 6.94659 4.63442C6.69891 5.22588 6.57143 5.85981 6.57143 6.5C6.57143 7.14019 6.69891 7.77412 6.94659 8.36558C7.19428 8.95704 7.55731 9.49446 8.01497 9.94715C8.47263 10.3998 9.01596 10.7589 9.61392 11.0039C10.2119 11.2489 10.8528 11.375 11.5 11.375C12.1472 11.375 12.7881 11.2489 13.3861 11.0039C13.984 10.7589 14.5274 10.3998 14.985 9.94715C15.4427 9.49446 15.8057 8.95704 16.0534 8.36558C16.3011 7.77412 16.4286 7.14019 16.4286 6.5ZM4.92857 6.5C4.92857 4.77609 5.62092 3.12279 6.8533 1.90381C8.08568 0.68482 9.75715 0 11.5 0C13.2429 0 14.9143 0.68482 16.1467 1.90381C17.3791 3.12279 18.0714 4.77609 18.0714 6.5C18.0714 8.22391 17.3791 9.87721 16.1467 11.0962C14.9143 12.3152 13.2429 13 11.5 13C9.75715 13 8.08568 12.3152 6.8533 11.0962C5.62092 9.87721 4.92857 8.22391 4.92857 6.5ZM1.64286 24.375H21.3571C21.2955 20.3277 17.9585 17.0625 13.8462 17.0625H9.1538C5.04665 17.0625 1.7096 20.3277 1.64286 24.375ZM0 24.4918C0 19.4898 4.09688 15.4375 9.1538 15.4375H13.8462C18.9031 15.4375 23 19.4898 23 24.4918C23 25.3246 22.3172 26 21.4752 26H1.52478C0.682813 26 0 25.3246 0 24.4918Z"
                  fill="#A0A0A0" />
              </svg>
            @endif
          </div>
          {{-- <p>{{ __('患者管理') }}</p> --}}
        </div>
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('user.treatment.index')" :active="request()->routeIs('user.treatment.index')">
        <div class="flex flex-col">
          <div class='mx-auto'>
            @if (request()->routeIs('user.treatment.index'))
              <!-- Active Icon SVG here -->
              <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5 20V0H25V15L20 20H5ZM16.6667 5H13.3333V8.33333H10V11.6667H13.3333V15H16.6667V11.6667H20V8.33333H16.6667V5ZM15.4167 22.5H16.6667V25H15.4167H1.25H0V23.75V6.25V5H2.5V6.25V22.5H15.4167Z"
                    fill="#FFD643" />
                </svg>
              @else
                <!-- Inactive Icon SVG here -->
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6.66667 20H5V18.3333V1.66667V0H6.66667H23.3333H25V1.66667V15L20 20H6.66667ZM19.3073 18.3333L23.3333 14.3073V1.66667H6.66667V18.3333H19.3073ZM16.6667 23.3333V25H15.8333H0.833333H0V24.1667V5.83333V5H1.66667V5.83333V23.3333H15.8333H16.6667ZM13.3333 4.16667H16.6667H17.5V5V7.5H20H20.8333V8.33333V11.6667V12.5H20H17.5V15V15.8333H16.6667H13.3333H12.5V15V12.5H10H9.16667V11.6667V8.33333V7.5H10H12.5V5V4.16667H13.3333ZM14.1667 8.33333V9.16667H13.3333H10.8333V10.8333H13.3333H14.1667V11.6667V14.1667H15.8333V11.6667V10.8333H16.6667H19.1667V9.16667H16.6667H15.8333V8.33333V5.83333H14.1667V8.33333Z"
                    fill="#A0A0A0" />
                </svg>
            @endif
          </div>
          {{-- <p>{{ __('処置') }}</p> --}}
        </div>
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('user.emergency.index')" :active="request()->routeIs('user.emergency.index')">
        <div class="flex flex-col">
          <div class='mx-auto'>
            @if (request()->routeIs('user.emergency.index'))
              <!-- Active Icon SVG here -->
              <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M9.33963 1.39458C8.90351 0.341106 7.75376 -0.219612 6.65498 0.0805704L1.67082 1.43989C0.685321 1.71175 0 2.60663 0 3.62612C0 17.6384 11.3616 29 25.3739 29C26.3934 29 27.2882 28.3147 27.5601 27.3292L28.9194 22.345C29.2196 21.2462 28.6589 20.0965 27.6054 19.6604L22.1682 17.3948C21.245 17.0097 20.1745 17.2759 19.5458 18.0519L17.2576 20.8441C13.2703 18.9581 10.0419 15.7297 8.15589 11.7424L10.9481 9.45985C11.7241 8.8255 11.9903 7.7607 11.6052 6.8375L9.33963 1.40024V1.39458Z"
                  fill="#FFD643" />
              </svg>
            @else
              <!-- Inactive Icon SVG here -->
              <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M21.2819 15.5842C20.3531 15.1877 19.2771 15.4482 18.6372 16.2298L16.7571 18.529C14.152 17.0169 11.9774 14.8423 10.4654 12.2373L12.7589 10.3628C13.5404 9.72287 13.8066 8.64689 13.4045 7.71814L10.6862 1.37549C10.2615 0.378789 9.19118 -0.176193 8.13218 0.0503307L1.78953 1.40947C0.747527 1.63033 0 2.55341 0 3.62373C0 17.0282 10.3918 28.0033 23.5584 28.932C23.8133 28.949 24.0738 28.966 24.3343 28.9773C24.3343 28.9773 24.3343 28.9773 24.3399 28.9773C24.6854 28.9887 25.0252 29 25.3763 29C26.4466 29 27.3697 28.2525 27.5905 27.2105L28.9497 20.8678C29.1762 19.8088 28.6212 18.7385 27.6245 18.3138L21.2819 15.5955V15.5842ZM25.3536 27.1821C12.3512 27.1708 1.81219 16.6318 1.81219 3.62373C1.81219 3.40854 1.95943 3.22732 2.16896 3.18201L8.51161 1.82288C8.72114 1.77757 8.93634 1.89083 9.02129 2.08904L11.7396 8.43169C11.8188 8.61857 11.7679 8.83377 11.6093 8.95836L9.3101 10.8385C8.62487 11.3991 8.44365 12.3789 8.89104 13.149C10.5616 16.0315 12.9628 18.4327 15.8396 20.0976C16.6098 20.545 17.5895 20.3638 18.1502 19.6786L20.0303 17.3794C20.1606 17.2208 20.3758 17.1698 20.557 17.2491L26.8996 19.9674C27.0978 20.0523 27.2111 20.2675 27.1658 20.4771L25.8067 26.8197C25.7614 27.0292 25.5745 27.1765 25.3649 27.1765C25.3593 27.1765 25.3536 27.1765 25.3479 27.1765L25.3536 27.1821Z"
                  fill="#A0A0A0" />
              </svg>
            @endif
          </div>
          {{-- <p>{{ __('緊急連絡先') }}</p> --}}
        </div>
      </x-responsive-nav-link>
    </div>
  </div>
</nav>
