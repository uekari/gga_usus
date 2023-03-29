<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('スケジュール情報') }}
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
            <div class=" flex-auto">
              <p class="py-5">{{$time->time}}</p>
            </div>
          </div>
          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">予定</p>
            </div>
            <div class=" flex-auto">
              <p class="py-5">{{$time->content}}</p>
            </div>
          </div>
          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">移動</p>
            </div>
            <div class=" flex-auto">
              @if($time->is_move == "0")
              <p class="py-5">移動あり</p>
              @elseif($time->is_move == "1")
              <p class="py-5">移動なし</p>
              @endif
            </div>
          </div>

          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">リスクの情報</p>
            </div>
            <div class=" flex-auto">
              @if($time->risk_title2 ==! NULL)
              <p class="pt-5">{{$time->risk_title1}}</p>
              @endif
              @if($time->risk_content2 ==! NULL)
              <p class="py-5">{{$time->risk_content1}}</p>
              @endif

              @if($time->risk_title2 ==! NULL)
              <p class="pt-5">{{$time->risk_title2}}</p>
              @endif
              @if($time->risk_content2 ==! NULL)
              <p class="py-5">{{$time->risk_content2}}</p>
              @endif
              @if($time->risk_title3 ==! NULL)
              <p class="pt-5">{{$time->risk_title3}}</p>
              @endif
              @if($time->risk_content3 ==! NULL)
              <p class="py-5">{{$time->risk_content3}}</p>
              @endif
            </div>
          </div>
          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">処置情報</p>
            </div>
            <div class=" flex-auto">
              <p class="py-5">{{$time->treatment_title1}}&emsp;{{$time->treatment_title2}}&emsp;{{$time->treatment_title3}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</x-app-layout>
