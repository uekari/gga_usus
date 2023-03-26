<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('ケアマネ一覧') }}
    </h2>
  </x-slot>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="hidden space-x-8 mb-6 sm:flex">
            <div class="pt-2.5 pb-2 px-6 text-base border border-1 border-gray-800 rounded-md ">
              <a href=" {{route('admin.caremanager.create')}}">
                {{ __('ケアマネージャー新規登録') }}
              </a>
            </div>
          </div>
          <section class="text-gray-600 body-font">
            <table class=" text-center w-full border-collapse">
              <thead>
                <tr>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">id</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">名前</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">ステーション名</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">住所</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">電話番号</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">FAX番号</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">修正</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($caremanagers as $caremanager)
                <tr class="hover:bg-grey-lighter">
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->id }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->caremanager_name }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->belong }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->address }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->tel }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->fax }}</td>
                  <td class="border border-1 border-gray-300">
                    <!-- 更新ボタン -->
                    <form action=" {{ route('admin.caremanager.edit',$caremanager->id) }}" method="GET" class="text-center">
                      @csrf
                      <button type="submit" class="mr-2 ml-2 text-base hover:bg-gray-200 hover:shadow-none text-white py-1 px-2 focus:outline-none focus:shadow-outline">
                        <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="black">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                      </button>
                    </form>
                    <!-- 削除ボタン -->

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
