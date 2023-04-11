<x-app-layout>
  <div class="sm:mt-12 pb-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="mt-24 bg-white">

          <section class="text-gray-900 text-center body-font">
            <div class="container mx-auto">
              <div class="w-8/12 sm:w-4/5 mx-auto overflow-auto">
                @foreach ($schedules as $schedule)
                <div class="pb-12">

                  <a href="{{ route('user.schedule.show', $schedule->id) }}">

                    <div class="py-8 border border-1 border-gray-900 rounded">
                      <p class="pb-4 text-sm">{{ $schedule->client ->client_name }}&ensp;様</p>
                      <h3 class="pb-4 text-xl">{{ $schedule->title }}</h3>
                      <time class="text-sm">{{ date('Y/m/d', strtotime($schedule->date))}}</time>

                    </div>
                  </a>
                </div>
                @endforeach

              </div>

              <div class="illust">
                <img src="{{ asset('illust/bg01.png')}}">
              </div>
            </div>


          </section>
        </div>

      </div>
    </div>
  </div>
</x-app-layout>
