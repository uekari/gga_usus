<x-app-layout>
  <div class="sm:mt-12 pb-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="p-6 bg-white">
          <div class="mb-6 ml-1">
            <a href="{{ url()->previous() }}">
              <p class="w-4 h-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M4.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l176 176c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 272 432 272c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 240 203.3 91.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-176 176z"/></svg></p>
            </a>
          </div>

          <section class="text-gray-900 body-font">
            <div class="flex items-center mb-10">
              <p class="text-center pr-4 text-3xl">  {{ __('患者情報 ') }}</p>
              <p class="w-6 h-6 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg></p>
            </div>
            <div class="lg:w-4/5 w-full mx-auto overflow-auto mb-4">
              @foreach ($clients as $clent)
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">名前</p>
                <p class="pb-3 border-b border-1 border-gray-400  ">{{ $clent->client_name }}</p>
              </div>
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">疾患</p>
                <p class="pb-3 border-b border-1 border-gray-400">{{ $clent->desease  }}</p>
              </div>
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">年齢</p>
                <p class="pb-3 border-b border-1 border-gray-400">{{ $clent->age  }}</p>

              </div>
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">介護度</p>
                <p class="pb-3 border-b border-1 border-gray-400">{{ $clent->carelevel  }}</p>
              </div>
              @endforeach


            </div>

          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
