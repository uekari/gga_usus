<x-app-layout>
  <div class="sm:mt-12 pb-20">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg">
        <div class="py-6 px-10 bg-round">
          <section class="text-gray-900 body-font ">
            <p class="mb-10 mt-4 text-2xl text-center font-bold"> {{ __('特記事項・注意点 ') }}</p>
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
                          <img class="object-contain w-full mt-3" src="{{ asset('storage/' . $image->img_path) }}">
                        @endif
                        @if (app('env') == 'production')
                          <img class="object-contain w-full mt-3"
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
