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
              <div class="flex justify-end mb-4">
                <button onclick="location.href='{{ route('admin.client.create')}}'" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</button>
              </div>
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
                      <!-- 更新ボタン -->
                      <td class="px-4 py-3">
                        <a href="{{ route('admin.client.edit', $client->id )}}">
                          <h3 class="">編集</h3>
                        </a>
                      </td>
                      <!-- 案件登録ボタン -->
                      <td class="px-4 py-3">
                        <a href="{{ route('admin.schedule.create',$client->id )}}">
                          <h3 class="">案件登録</h3>
                        </a>
                      </td>
                      <!-- 処置登録ボタン -->
                      <td class="px-4 py-3">
                        <a href="{{ route('admin.treatment.create',$client->id )}}">
                          <h3 class="">処置登録</h3>
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
