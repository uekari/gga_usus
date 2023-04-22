<x-app-layout>
  <x-slot name="header">
    <div class="mb-6 ml-1">
      <a href="{{ route('admin.schedule.index') }}">
        <p class="w-5 h-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 432c0 8.8 7.2 16 16 16s16-7.2 16-16L32 80c0-8.8-7.2-16-16-16S0 71.2 0 80L0 432zM100.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l128 128c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L150.6 272 256 272l176 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-176 0-105.4 0L251.3 139.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-128 128z"/></svg></p>
      </a>
    </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('案件詳細情報一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @foreach ($destinations as $destination)
          @if ($loop->first)
          <p class="pb-5 text-lg">{{ $destination-> schedule -> title }}</p>
          @endif
          @endforeach

          @foreach ($destinations as $destination)
          <div class="mb-8">
            <div class=" flex items-center text-center">
              <div class="w-24 py-3 border border-1 border-gray-200">{{ substr($destination->time, 0, 5) }}</div>
              <div class="w-80 py-3 border border-1 border-gray-200 text-left pl-6">{{ $destination->content }}</div>
              <div class="w-40 py-3 border border-1 border-gray-200">
                @if($destination->is_move == "0")
                <p>移動あり</p>
                @elseif($destination->is_move == "1")
                <p>移動なし</p>
                @endif
              </div>
              <div class="w-80 py-3 border border-1 border-gray-200 text-left pl-6">
                <p>処置&nbsp;：&nbsp;
              @foreach ($destination -> treatments as $treatment)
              {{ $treatment -> title}}
              @endforeach</p>
              </div>
            </div>
            <div class="flex justify-center items-center text-center border border-1 border-gray-200">
              <div class="w-44 p-4"> <a href="{{ route('admin.destination.show',$destination->id )}}">
                  <p class="px-3 py-2 bg-black rounded text-white text-sm">詳細ページへ</p>
                </a>
              </div>
              <div class="w-44 p-4"> <a href="{{ route('admin.destination.edit',$destination->id )}}">
                  <p class="px-3 py-2 bg-black rounded text-white text-sm">編集ページへ</p>
                </a>
              </div>
              <div class="w-56 p-4"> <a href="{{ route('admin.destinationtreatment.index',[$destination->schedule_id, $destination->id])}}">
                  <p class="px-3 py-2 bg-black rounded text-white text-sm">処置選択ページへ</p>
                </a>
              </div>
            </div>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  window.initMap = () => {

    let map;

    const area = document.getElementById("map"); // マップを表示させるHTMLの箱
    // マップの中心位置
    const center = {
      lat: 35.667379,
      lng: 139.7054965
    };

    //マップ作成
    map = new google.maps.Map(area, {
      center,
      zoom: 17,
    });
  }
  </script>
  <!-- 作成したAPIキーを貼り付ける -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX0xI6EtxVVp3U4bJ5-O8tm8KiTGVO0PM&callback=initMap" async defer></script>
</x-app-layout>
