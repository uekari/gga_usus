<x-app-layout>
  <div class="sm:mt-12 sm:pb-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class=" p-6 bg-white">
          <section class="text-gray-900 body-font">
            <div class="flex justify-center items-center mb-8">
              <p class="text-xl text-center pr-4">  {{ __('患者情報 ') }}</p>
              <p class="w-5 h-5 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM43.3 480H404.7L360.4 336H87.6L43.3 480zM64 304H384l54.2 176 9.8 32H414.5 33.5 0l9.8-32L64 304z"/></svg></p>
            </div>
            <div class="lg:w-4/5 w-full mx-auto overflow-auto mb-4">
              @foreach ($clients as $clent)
              <div class="flex items-center">
                <div class="w-3/12">
                  <p class="pb-3 text-sm">名前</p>
                </div>
                <div class=" flex-auto">
                  <p class="pb-3">{{ $clent->client_name }}</p>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-3/12">
                  <p class="py-3 text-sm">疾患</p>
                </div>
                <div class=" flex-auto">
                  <p class="py-3">{{ $clent->desease  }}</p>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-3/12">
                  <p class="py-3 text-sm">年齢</p>
                </div>
                <div class=" flex-auto">
                  <p class="py-3 text-sm">{{ $clent->age  }}</p>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-3/12">
                  <p class="pt-3 text-sm">介護度</p>
                </div>
                <div class=" flex-auto">
                  <p class="pt-3">{{ $clent->carelevel  }}</p>
                </div>
              </div>
              @endforeach


            </div>

          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
