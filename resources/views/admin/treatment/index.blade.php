<x-app-layout>
  <x-slot name="header">
    <a href="{{ route('admin.client.index') }}">
      << 戻る
    </a>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('処置情報一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <section class="text-gray-600 body-font">

            <table class="text-center w-full border-collapse">
              <thead>
                <tr>

                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">患者名</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">項目</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">内容・手順</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">ポイント</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($treatments as $treatment)
                <tr class="hover:bg-grey-lighter">
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $treatment-> client -> client_name }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $treatment->title }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $treatment->content }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $treatment->point }}</td>

                  <!-- 処置編集ボタン -->
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <a href="{{ route('admin.treatment.edit',$treatment->id )}}">
                      <p class="">編集</p>
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
