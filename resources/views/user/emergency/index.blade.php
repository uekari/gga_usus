<x-app-layout>
  <div class="sm:mt-12 pb-20">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="p-6 bg-white">
          <div class="mb-6 ml-1">
            <a href="{{ url()->previous() }}">
              <p class="w-4 h-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M4.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l176 176c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 272 432 272c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 240 203.3 91.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-176 176z"/></svg></p>
            </a>
          </div>
          <section class="text-gray-900 body-font">
            <div class="flex justify-center items-center mb-10">
              <p class="text-center pr-4 text-3xl">  {{ __('緊急連絡先 ') }}</p>
              <p class="w-6 h-6 m-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"/></svg></p>
            </div>

            <div lass="lg:w-4/5 w-full mx-auto overflow-auto mb-4">
              @foreach ($doctors as $doctor)
              <div class="mb-8">
                <div class="flex items-center pb-2 ml-1">
                  <p class="w-3/12">{{$doctor->belong}}</p>
                  <p class="w-6/12">{{$doctor->doctor_name}}</p>
                </div>
                <div class="pb-3 border-b border-1 border-gray-400 text-4xl">
                  <a href="tel:{{$doctor->tel}}">{{$doctor->tel}}</a>
                </div>
                @endforeach
              </div>

              <div lass="lg:w-4/5 w-full mx-auto overflow-auto mb-4">
                @foreach ($caremanagers as $caremanager)
                <div class="mb-8">
                  <div class="flex items-center pb-2 ml-1">
                    <p class="w-3/12">{{$caremanager->belong}}</p>
                    <p class="w-6/12">{{$caremanager->caremanager_name}}</p>
                  </div>
                  <div class="pb-3 border-b border-1 border-gray-400 text-4xl">
                    <a href="tel:{{$doctor->tel}}">{{$caremanager->tel}}</a>
                  </div>
                  @endforeach
                </div>
                <div class="pt-7">
                  <p class="mb-12 text-2xl text-center">旅行先周辺病院の緊急連絡先</p>
                  @foreach ($hospitals as $hospital)
                  <div class="mb-8">
                    <div class="flex items-center pb-2">
                      <p class="w-5/12">病院名 : {{$hospital->hospital}}</p>
                      <p class="w-6/12">担当者 : {{$hospital->name}}</p>
                    </div>
                    <div class="flex">
                      <p class="pb-2">{{$hospital->address}}</p>
                      <div class="pl-4">
                        <a href="https://www.google.co.jp/maps/place/{{$hospital->address}}" target='_blank'>
                          <div class="w-3 h-3 pt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                              <defs>
                                <style>
                                .fa-secondary {
                                  opacity: .4
                                }
                                </style>
                              </defs>
                              <path class="fa-primary" d="M160 288A144 144 0 1 0 160 0a144 144 0 1 0 0 288zM96 144c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-53 43-96 96-96c8.8 0 16 7.2 16 16s-7.2 16-16 16c-35.3 0-64 28.7-64 64z" />
                              <path class="fa-secondary" d="M128 284.4V480c0 17.7 14.3 32 32 32s32-14.3 32-32V284.4c-10.3 2.3-21 3.6-32 3.6s-21.7-1.2-32-3.6z" />
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="pb-3 border-b border-1 border-gray-400 text-4xl">
                      <a href="tel:{{$doctor->tel}}">{{$hospital->tel}}</a>
                    </div>
                  </div>
                  @endforeach


          </section>


        </div>
      </div>
    </div>
</x-app-layout>
