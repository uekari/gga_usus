<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          <section class="text-gray-600 body-font">
            <p class="mb-8 text-xl text-center">  {{ __('特記事項・注意点') }}</p>

            <div class="w-full mx-auto overflow-auto">

              <div class="flex flex-col mb-8 text-gray-900">
                <p class="mb-1 uppercase text-base">
                  {{$time->risk_title1}}</p>
                <div class="mb-2 gga_border"></div>
                <p class="text-sm">{{$time->risk_content1}}</p>
              </div>
              @if($time->risk_title2)
              <div class="flex flex-col mb-8 text-gray-900">
                <p class="mb-1 uppercase text-base">
                  {{$time->risk_title2}}</p>
                <div class="mb-2 gga_border"></div>
                <p class="text-sm">{{$time->risk_content2}}</p>
              </div>
              @endif
              @if($time->risk_title3)
              <div class="flex flex-col mb-4 text-gray-900">
                <p class="mb-1 uppercase text-base">
                  {{$time->risk_title3}}</p>
                <div class="mb-2 gga_border"></div>
                <p class="text-sm">{{$time->risk_content3}}</p>
              </div>
              @endif
            </div>

          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
