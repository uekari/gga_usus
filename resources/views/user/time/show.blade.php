<x-app-layout>
  <div class="sm:mt-12 sm:pb-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="p-6 bg-white">

          <section class="text-gray-600 body-font">
            <p class="mb-8 text-xl text-center">  {{ __('特記事項・注意点') }}</p>

            <div class="w-full mx-auto overflow-auto">

              <div class="flex flex-col mb-8 text-gray-900">
                <p class="mb-1 uppercase text-base">
                  {{$time->risk_title1}}</p>
                <div class="mb-2 gga_border"></div>
                <p class="text-sm">{{$time->risk_content1}}</p>
                <img src="{{ Storage::url($time->risk_img1) }}" width="25%">
              </div>
              @if($time->risk_title2)
              <div class="flex flex-col mb-8 text-gray-900">
                <p class="mb-1 uppercase text-base">
                  {{$time->risk_title2}}</p>
                <div class="mb-2 gga_border"></div>
                <p class="text-sm">{{$time->risk_content2}}</p>
                <img src="{{ Storage::url($time->risk_img2) }}" width="25%">
              </div>
              @endif
              @if($time->risk_title3)
              <div class="flex flex-col mb-4 text-gray-900">
                <p class="mb-1 uppercase text-base">
                  {{$time->risk_title3}}</p>
                <div class="mb-2 gga_border"></div>
                <p class="text-sm">{{$time->risk_content3}}</p>
                <img src="{{ Storage::url($time->risk_img3) }}" width="25%">
              </div>
              @endif
            </div>

          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
