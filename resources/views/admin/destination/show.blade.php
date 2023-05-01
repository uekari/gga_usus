<x-app-layout>
  <x-slot name="header">
    <div class="mb-6 ml-1">
      <a href="{{ url()->previous() }}">
        <p class="w-5 h-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M0 432c0 8.8 7.2 16 16 16s16-7.2 16-16L32 80c0-8.8-7.2-16-16-16S0 71.2 0 80L0 432zM100.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l128 128c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L150.6 272 256 272l176 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-176 0-105.4 0L251.3 139.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-128 128z" />
          </svg></p>
      </a>
    </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('時間別詳細情報') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="pt-2 pb-4 px-8 bg-white border-b border-gray-200">

          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">時間</p>
            </div>
            <div class=" w-4/5">
              <p class="py-5">{{ substr($destination->time, 0, 5) }}</p>
            </div>
          </div>

          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">予定</p>
            </div>
            <div class=" w-4/5">
              <p class="py-5">{{ $destination->content }}</p>
            </div>
          </div>
          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">住所</p>
            </div>
            <div class=" w-4/5">
              <p class="py-5">{{ $destination->address }}</p>
            </div>
          </div>


          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">リスクの情報</p>
            </div>
            <div class=" w-4/5">
              @foreach ($risks as $risk)
                <div class="mb-8">
                  <p class="mb-2">{{ $risk->title }}</p>
                  <p class="">{{ $risk->content }}</p>
                  <div class="grid grid-cols-3 gap-3">
                    @foreach ($risk->images as $image)
                      @if ($image == !null)
                        @if (app('env') == 'local')
                          <img class="object-contain h-32 w-full m-2" src="{{ asset('storage/' . $image->img_path) }}">
                        @endif
                        @if (app('env') == 'production')
                          <img class="object-contain h-32 w-full m-2" src="{{ secure_asset('storage/' . $image->img_path) }}">
                        @endif
                      @endif
                    @endforeach
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</x-app-layout>
