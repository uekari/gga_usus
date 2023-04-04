<x-app-layout>
  <x-slot name="header">
    <a href="{{ route('admin.schedule.index') }}">
      戻る
    </a>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('案件詳細情報一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @foreach ($times as $time)
          @if ($loop->first)
          <p class="pb-5 text-lg">{{ $time-> schedule -> title }}</p>
          @endif
          @endforeach

          @foreach ($times as $time)
          <div class="mb-8">
            <div class=" flex items-center text-center">
              <div class="w-24 py-3 border border-1 border-gray-200">{{ substr($time->time, 0, 5) }}</div>
              <div class="w-80 py-3 border border-1 border-gray-200 text-left pl-6">{{ $time->content }}</div>
              <div class="w-40 py-3 border border-1 border-gray-200">
                @if($time->is_move == "0")
                <p>移動あり</p>
                @elseif($time->is_move == "1")
                <p>移動なし</p>
                @endif
              </div>
              <div class="w-80 py-3 border border-1 border-gray-200 text-left pl-6">
                <p>処置&nbsp;：&nbsp;
              @foreach ($time -> treatments as $treatment)
              {{ $treatment -> title}}
              @endforeach</p>
              </div>
            </div>
            <div class="flex justify-center items-center text-center border border-1 border-gray-200">
              <div class="w-44 p-4"> <a href="{{ route('admin.time.show',$time->id )}}">
                  <p class="px-3 py-2 bg-black rounded text-white text-sm">詳細ページへ</p>
                </a>
              </div>
              <div class="w-44 p-4"> <a href="{{ route('admin.time.edit',$time->id )}}">
                  <p class="px-3 py-2 bg-black rounded text-white text-sm">編集ページへ</p>
                </a>
              </div>
              <div class="w-56 p-4"> <a href="{{ route('admin.timetreatment.index',[$time->schedule_id, $time->id])}}">
                  <p class="px-3 py-2 bg-black rounded text-white text-sm">処置編集ページへ</p>
                </a>
              </div>
            </div>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </div>
</x-app-layout>
