<x-app-layout>
  <div class="sm:mt-12 pb-20">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="p-6 bg-appColor">
          <div class="mb-6 ml-1">
            <a href="{{ url()->previous() }}">
              <p class="w-4 h-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M4.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l176 176c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 272 432 272c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 240 203.3 91.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-176 176z" />
                </svg></p>
            </a>
          </div>
          <section class="text-gray-900 body-font">
            <p class="mb-10 text-2xl text-center font-bold"> {{ __('処置 ') }}</p>

            <div class="bg-white p-3 rounded">
              <p class="text-left pr-4 text-3xl"> {{ $treatment->title }}</p>

              <div class="w-full mx-auto overflow-auto">

                <div class="flex flex-col mb-8 py-5 text-gray-900">
                  <div class=mb-6>
                    <p class="mb-1 text-xl">手順</p>
                    <div class=" mb-2 gga_border"></div>

                    <p class="">{{ $treatment->content }}</p>
                  </div>
                  <div>
                    <p class="mb-1 text-xl">注意点</p>
                    <div class="mb-2 gga_border"></div>
                    <p class="">{{ $treatment->point }}</p>
                  </div>
                </div>
              </div>
            </div>

        </div>

        </section>
      </div>
    </div>
  </div>
  </div>
</x-app-layout>
