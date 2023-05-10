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
          <section class="text-gray-900 body-font ">
            <p class="mb-10 text-2xl text-center font-bold"> {{ __('特記事項・注意点 ') }}</p>

            @foreach ($risks as $risk)
              <div class="w-full mx-auto overflow-auto">
                <div class="flex flex-col mb-8 text-gray-900">
                  <p class="mb-1 uppercase text-xl">
                    {{ $risk->title }}</p>
                  <div class="mb-2 border border-1 border-white"></div>
                  <p class="text-lg">{{ $risk->content }}</p>
                  <div class="w-full">
                    @foreach ($risk->images as $image)
                      @if ($image == !null)
                        @if (app('env') == 'local')
                          <img class="object-contain w-full m-3" src="{{ asset('storage/' . $image->img_path) }}">
                        @endif
                        @if (app('env') == 'production')
                          <img class="object-contain w-full m-3"
                            src="{{ secure_asset('storage/' . $image->img_path) }}">
                        @endif
                      @endif
                    @endforeach

                  </div>

                </div>
              </div>
            @endforeach

          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
