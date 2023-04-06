<x-app-layout>
  <x-slot name="header">
    <div class="mb-6 ml-1">
      <a href="{{ route('admin.time.index',$time->id) }}">
        <p class="w-5 h-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 432c0 8.8 7.2 16 16 16s16-7.2 16-16L32 80c0-8.8-7.2-16-16-16S0 71.2 0 80L0 432zM100.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l128 128c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L150.6 272 256 272l176 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-176 0-105.4 0L251.3 139.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-128 128z"/></svg></p>
      </a>
    </div>
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
              <p class="py-5">{{ substr($time->time, 0, 5) }}</p>
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
              @if($time->risk_title1 ==! NULL)
              <p class="pt-5">{{$time->risk_title1}}</p>
              @endif
              @if($time->risk_content1 ==! NULL)
              <p class="py-5">{{$time->risk_content1}}</p>
              @endif
              <!-- @if($time->risk_img1 ==! NULL)
              <img src="{{ asset("storage/".$time->risk_img1) }}" width="25%">
              @endif -->
              @if($time->risk_img1 ==! NULL)
              @if(app('env')=='local')
              <img src="{{ asset("storage/".$time->risk_img1) }}" width="25%">
              @endif
              @if(app('env')=='production')
              <img src="{{ secure_asset("storage/".$time->risk_img1) }}" width="25%">
              @endif
              @endif

              @if($time->risk_title2 ==! NULL)
              <p class="pt-5">{{$time->risk_title2}}</p>
              @endif
              @if($time->risk_content2 ==! NULL)
              <p class="py-5">{{$time->risk_content2}}</p>
              @endif
              <!-- @if($time->risk_img2 ==! NULL)
              <img src="{{ asset("storage/".$time->risk_img2) }}" width="25%">
              @endif -->
              @if($time->risk_img2 ==! NULL)
              @if(app('env')=='local')
              <img src="{{ asset("storage/".$time->risk_img2) }}" width="25%">
              @endif
              @if(app('env')=='production')
              <img src="{{ secure_asset("storage/".$time->risk_img2) }}" width="25%">
              @endif
              @endif

              @if($time->risk_title3 ==! NULL)
              <p class="pt-5">{{$time->risk_title3}}</p>
              @endif
              @if($time->risk_content3 ==! NULL)
              <p class="py-5">{{$time->risk_content3}}</p>
              @endif
              <!-- @if($time->risk_img3 ==! NULL)
              <img src="{{ asset("storage/".$time->risk_img3) }}" width="25%">
              @endif -->
              @if($time->risk_img3 ==! NULL)
              @if(app('env')=='local')
              <img src="{{ asset("storage/".$time->risk_img3) }}" width="25%">
              @endif
              @if(app('env')=='production')
              <img src="{{ secure_asset("storage/".$time->risk_img3) }}" width="25%">
              @endif
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</x-app-layout>
