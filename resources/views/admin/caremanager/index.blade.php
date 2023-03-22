<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('ステーション一覧') }}
    </h2>
  </x-slot>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('admin.carestation.create')" :active="request()->routeIs('admin.carestation.create')">
              {{ __('新規登録') }}
            </x-nav-link>
          </div>
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">id</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ステーション名</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">住所</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">電話番号</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">FAX番号</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">修正</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($carestations as $carestation)
              <tr class="hover:bg-grey-lighter">
                <td class="px-4 py-3">{{ $carestation->id }}</td>
                <td class="px-4 py-3">{{ $carestation->carestation_name }}</td>
                <td class="px-4 py-3">{{ $carestation->address }}</td>
                <td class="px-4 py-3">{{ $carestation->tel }}</td>
                <td class="px-4 py-3">{{ $carestation->fax }}</td>
                <td>
                  <!-- 更新ボタン -->
                  <form action="{{ route('admin.carestation.edit',$carestation->id) }}" method="GET" class="text-left">
                    @csrf
                    <button type="submit" class="mr-2 ml-2 text-sm hover:bg-gray-200 hover:shadow-none text-white py-1 px-2 focus:outline-none focus:shadow-outline">
                      <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="black">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                  </form>
                  <!-- 削除ボタン -->
        </div>
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
