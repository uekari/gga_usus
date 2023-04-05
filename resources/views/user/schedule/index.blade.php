<x-app-layout>
  <div class="sm:mt-12 sm:pb-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="pt-8 bg-white">

          <section class="text-gray-900 text-center body-font">
            <div class="container px-5 mx-auto">
              <div class="lg:w-4/5 w-full mx-auto overflow-auto">
                @foreach ($schedules as $schedule)
                <div class="pb-12">
                  <p class="pb-4 text-base">{{ $schedule->client ->client_name }}&ensp;様</p>
                  <a href="{{ route('user.schedule.show', $schedule->id) }}">
                    <div class="py-8 border border-1 border-gray-900 rounded">
                      <h3 class="pb-4 text-xl">{{ $schedule->title }}</h3>
                      <time class="text-sm">{{ date('Y/m/d', strtotime($schedule->date))}}</time>
                      <div class="w-5 h-5 mt-4 m-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                          <path d="M562.7 221.2c7.6 9.5 13.3 21.3 13.3 34.8c0 26.9-21.6 47.1-41.8 59.2c-21.1 12.7-47.3 20.8-67.9 20.8H365.9l-96 167.9-4.6 8.1H256 160 138.8l5.8-20.4L189.1 336H144l-43.2 57.6L96 400H88 24 3.5l5-19.9L39.5 256 8.5 131.9 3.5 112H24l64 0h8l4.8 6.4L144 176l45.1 0L144.6 20.4 138.8 0 160 0l96 0h9.3l4.6 8.1 96 167.9H466.3c20.7 0 46.9 8.4 68 21.2c10.7 6.5 20.8 14.5 28.4 24zm-45 3.3c-17.3-10.5-37.9-16.6-51.3-16.6H356.6h-9.3l-4.6-8.1L246.7 32l-65.5 0 44.5 155.6 5.8 20.4H210.3L136 208h-8l-4.8-6.4L80 144H44.5l27 108.1 1 3.9-1 3.9L44.5 368H80l43.2-57.6L128 304h8 74.3 21.2l-5.8 20.4L181.2 480h65.5l96-167.9 4.6-8.1h9.3H466.3c13.6 0 34.2-5.9 51.4-16.2C535.8 276.9 544 265.1 544 256c0-4.1-1.7-9-6.3-14.8c-4.6-5.8-11.5-11.5-20-16.7z" />
                        </svg>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>

          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
