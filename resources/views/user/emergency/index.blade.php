<x-app-layout>


  @php
    // 電話番号にハイフンをつける
    function formatPhoneNumber($phoneNumber)
    {
       $pattern = '/^(\d{2,3})(\d{1,4})(\d{4})$/';
        return preg_replace($pattern, '$1-$2-$3', $phoneNumber);
    }
  @endphp
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
            <div class="flex justify-center items-center mb-10">
              <p class="pb-2 text-2xl text-center font-bold"> {{ __('緊急連絡先 ') }}</p>
            </div>

            <div lass="lg:w-4/5 w-full mx-auto overflow-auto mb-4">
              @foreach ($doctors as $doctor)
                <div class="bg-white p-3 rounded mb-3">
                  <div class="flex items-center pb-2 ml-1">
                    <p >{{ $doctor->belong }} / {{ $doctor->doctor_name }}</p>
                  </div>
                  <div class="pb-3 text-4xl">
                    <a href="tel:{{ $doctor->tel }}">{{ formatPhoneNumber($doctor->tel) }}</a>
                  </div>
              @endforeach
            </div>

            <div lass="lg:w-4/5 w-full mx-auto overflow-auto">
              @foreach ($caremanagers as $caremanager)
                <div class="bg-white p-3 rounded mb-3">
                  <div class="flex items-center pb-2 ml-1">
                    <p>{{ $caremanager->belong }} / {{ $caremanager->caremanager_name }}</p>
                  </div>
                  <div class="pb-3 text-4xl">
                    <a href="tel:{{ $doctor->tel }}">{{ formatPhoneNumber($caremanager->tel) }}</a>
                  </div>
              @endforeach
            </div>
            <div class="pt-7">
              <p class="mb-3 text-2xl text-center">旅行先周辺病院の緊急連絡先</p>
              @foreach ($hospitals as $hospital)
                <div class="bg-white p-3 rounded mb-3">
                  <div class="flex items-center pb-2">
                    <p class="w-5/12">病院名 / {{ $hospital->hospital }}</p>
                    <p class="w-6/12">担当者 / {{ $hospital->name }}</p>
                  </div>
                  <div class="flex">
                    <p class="pb-2">{{ $hospital->address }}</p>
                    <div class="pl-4">
                      <a href="https://www.google.co.jp/maps/place/{{ $hospital->address }}" target='_blank'>
                        <div class="w-3 h-3 pt-0.5">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                              <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                              <path
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" 
                                fill="#FF0000"/>
                            </svg>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="pb-3 text-4xl">
                    <a href="tel:{{ $doctor->tel }}">{{ formatPhoneNumber($hospital->tel) }}</a>
                  </div>
                </div>
              @endforeach


          </section>


        </div>
      </div>
    </div>
</x-app-layout>
