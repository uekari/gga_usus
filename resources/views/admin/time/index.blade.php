<x-app-layout>
  <x-slot name="header">
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
          <td class="px-4 py-3">{{ $time-> schedule -> title }}</td>
          @endif
          @endforeach
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">時間</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">行き先</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">移動の有無</th>

                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">詳細</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">編集</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($times as $time)
              <tr>
                <td class="px-4 py-3">{{ substr($time->time, 0, 5) }}</td>
                <td class="px-4 py-3">{{ $time->content }}</td>
                <td class="px-4 py-3">
                  @if($time->is_move == "0")
                  <p>移動あり</p>
                  @elseif($time->is_move == "1")
                  <p>移動なし</p>
                  @endif
                </td>
                <td class="px-4 py-3 text-base ">
                  <a href="{{ route('admin.time.show',$time->id )}}">
                    <h3 class="">詳細</h3>
                  </a>
                </td>
                <td class="px-4 py-3 text-base ">
                  <!-- <img src="{{ Storage::url($time->risk_img1) }}" width="25%"> -->
                    <h3 class="">編集 *設定未</h3>
                  </a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
