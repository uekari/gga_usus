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
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">id</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">時間</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">案件名</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">行き先</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">移動の有無</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>

              </tr>
            </thead>
            <tbody>
              @foreach ($times as $time)
              <tr>　
                <td class="px-4 py-3">{{ $time->id }}</td>
                <td class="px-4 py-3">{{ $time->time }}</td>
                <td class="px-4 py-3">{{ $time-> schedule -> content }}</td>
                <td class="px-4 py-3">{{ $time->content }}</td>
                <td class="px-4 py-3">{{ $time->is_move }}</td>
                <!-- リスク登録ボタン -->
                <td class="px-4 py-3">
                  <a href="{{ route('admin.risk.create',$time->id )}}">
                    <h3 class="">リスク登録</h3>
                  </a>
                </td>
                <!-- リスク一覧ボタン -->
                <td class="px-4 py-3">
                  <a href="{{ route('admin.risk.index',$time->id )}}">
                    <h3 class="">リスク一覧</h3>
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
