<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          患者情報一覧
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          <section class="text-gray-600 body-font">
            <div class="container px-5 mx-auto">
              <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                  <thead>
                    <tr>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">id</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">依頼者</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">案件</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">施行日</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($schedules as $schedule)
                    <tr>
                      <!-- 詳細ボタン -->
                      <a href="{{ route('user.schedule.show', $schedule->id )}}">詳細へ
                      </a>
                      <td class="px-4 py-3">{{ $schedule->id }}</td>
                      <td class="px-4 py-3">{{ $schedule->client ->client_name }}{{ $schedule->client ->client_name2 }}</td>
                      <td class="px-4 py-3">{{ $schedule->title }}</td>
                      <td class="px-4 py-3">{{ $schedule->date }}</td>

                    </tr>

                    @endforeach
                  </tbody>

                </table>
              </div>
            </div>

          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
