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
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('admin.client.create')" :active="request()->routeIs('admin.client.create')">
              {{ __('新規登録') }}
            </x-nav-link>
          </div>
          <section class="text-gray-600 body-font">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
              <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead>
                  <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">id</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>

                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">疾患</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">年齢</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">介護度</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($clients as $client)
                  <tr>
                    <td class="px-4 py-3">{{ $client->id }}</td>
                    <td class="px-4 py-3">{{ $client->client_name }}{{ $client->client_name2 }}</td>
                    <td class="px-4 py-3">{{ $client->desease }}</td>
                    <td class="px-4 py-3">{{ $client->age }}</td>
                    <td class="px-4 py-3">{{ $client->carelevel }}</td>
                    <td class="px-4 py-3">
                      <!-- 詳細ボタン -->
                      <a href="{{ route('admin.client.show', $client->id )}}">
                        <h3 class="">詳細</h3>
                      </a>
                    </td>
                    <!-- 更新ボタン 詳細画面へ変更-->
                    <!-- <td class="px-4 py-3">
                      <a href="{{ route('admin.client.edit', $client->id )}}">
                        <h3 class="">編集</h3>
                      </a>
                    </td> -->
                    <!-- 案件登録ボタン -->
                    <td class="px-4 py-3">
                      <a href="{{ route('admin.schedule.create',$client->id )}}">
                        <h3 class="">案件登録</h3>
                      </a>
                    </td>

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
