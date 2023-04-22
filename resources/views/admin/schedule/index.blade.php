<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('案件一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class='flex justify-end mb-4'>
            <form>
              <div class='text-sm'>
                <input type="search" class="w-60 border border-1 border-gray-600 rounded-sm text-sm" name="search" value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
                <input type="submit" value="検索" class="ml-3 mr-1">
                <button>
                  <a href="{{ route('admin.schedule.index') }}" class="">
                    クリア
                  </a>
                </button>
              </div>
            </form>
          </div>
          <section class="text-gray-600 body-font mb-6">
            <table class="text-center w-full border-collapse">
              <thead>
                <tr>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">日程</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">依頼者</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">旅行タイトル</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($schedules as $schedule)
                <tr class="hover:bg-grey-lighter">
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ date('Y/m/d', strtotime($schedule->date))}}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $schedule->client ->client_name }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $schedule->title }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <a href="{{ route('admin.schedule.edit',$schedule->id)}}">
                      <p class="">案件編集</p>
                    </a>
                  </td>

                  <!-- 詳細登録ボタン -->
                  <td class="py-4 px-4 text-base border border-1 border-gray-300">
                    <div>
                      <a href="{{ route('admin.time.create',$schedule->id )}}">
                        <p class="py-2 px-3 bg-black rounded text-white text-sm">詳細登録</p>
                      </a>
                    </div>
                  </td>
                  <!-- 詳細一覧ボタン -->
                  <td class="py-4 px-4 text-base border border-1 border-gray-300">
                    <div>
                      <a href="{{ route('admin.time.index',$schedule->id )}}">
                        <p class="py-2 px-3 bg-black rounded text-white text-sm">詳細一覧</p>
                      </a>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <a href="{{ route('admin.emergencyhospital.index',$schedule->id)}}">
                      <p class="">緊急連絡先<br>一覧</p>
                    </a>
                  </td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <a href="{{ route('admin.emergencyhospital.create',$schedule->id)}}">
                      <p class="">緊急連絡先<br>登録</p>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </section>
          {{ $schedules->links() }}
        </div>
      </div>
    </div>
  </div>
  <div class="map-wrap">
    <div id="map" class="map"></div>
  </div>
</x-app-layout>
