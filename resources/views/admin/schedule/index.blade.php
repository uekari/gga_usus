<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('案件一覧') }}
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
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">依頼者</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">案件</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">施行日</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl"></th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($schedules as $schedule)
              <tr>
                <td class="px-4 py-3">{{ $schedule->id }}</td>
                <td class="px-4 py-3">{{ $schedule->client ->client_name }}{{ $schedule->client ->client_name2 }}</td>
                <td class="px-4 py-3">{{ $schedule->content }}</td>
                <td class="px-4 py-3">{{ $schedule->date }}</td>
                <!-- 詳細登録ボタン -->
                <td class="px-4 py-3">
                  <a href="{{ route('admin.time.create',$schedule->id )}}">
                    <h3 class="">詳細登録</h3>
                  </a>
                </td>
                <!-- 詳細一覧ボタン -->
                <td class="px-4 py-3">
                  <a href="{{ route('admin.time.index',$schedule->id )}}">
                    <h3 class="">詳細一覧</h3>
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
