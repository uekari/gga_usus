<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('患者情報一覧') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="hidden space-x-8 mb-6 sm:flex">
            <div class="pt-2.5 pb-2 px-6 text-base border border-1 border-gray-800 rounded-md ">
              <a href=" {{route('admin.client.create')}}">
                {{ __('患者情報新規登録') }}
              </a>
            </div>
          </div>

          <section class="text-gray-600 body-font">
            <table class=" text-center table-auto w-full text-left whitespace-no-wrap">
              <thead>
                <tr>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">id</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">名前</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">疾患</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">年齢</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">介護度</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($clients as $client)
                <tr class="hover:bg-grey-lighter">
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $client->id }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $client->client_name }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $client->desease }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $client->age }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $client->carelevel }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <!-- 詳細ボタン -->
                    <a href="{{ route('admin.client.show', $client->id )}}">
                      <h3 class="">詳細</h3>
                    </a>
                  </td>
                  <!-- 更新ボタン 詳細画面へ変更-->
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <a href="{{ route('admin.client.edit', $client->id )}}">
                      <h3 class="">編集</h3>
                    </a>
                  </td>
                  <!-- 案件登録ボタン -->
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <a href="{{ route('admin.schedule.create',$client->id )}}">
                      <h3 class="">案件登録</h3>
                    </a>
                  </td>
                  <!-- 処置登録ボタン -->
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <a href="{{ route('admin.treatment.create',$client->id )}}">
                      <h3 class="">処置登録</h3>
                    </a>
                  </td>
                  <!-- 処置一覧ボタン -->
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <a href="{{ route('admin.treatment.index',$client->id)}}">
                      <h3 class="">処置一覧</h3>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
