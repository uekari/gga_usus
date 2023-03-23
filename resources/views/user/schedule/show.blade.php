<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('案件詳細') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="mb-6">
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">案件</p>
              <p class="py-2 px-3 text-grey-darkest" id="schedule_name">
                {{$schedule->title}}
              </p>
            </div>

            @foreach ($schedule->times as $time)
            <div class="flex flex-col mb-4">
              <p class="py-2 px-3 text-grey-darkest">
                {{$time->time}}
              </p>
              <p class="py-2 px-3 text-grey-darkest">
                {{$time->content}}
              </p>
              <div class="py-2 px-3 text-grey-darkest">
                @if($time->is_move = 1)
                <p>移動あり</p>
                @endif
              </div>
              <div class="py-2 px-3 text-grey-darkest">
                @if($time->risk_title1)
                <a href="{{ route('user.time.show',$time->id )}}">リスクあり</a>
                @endif
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
