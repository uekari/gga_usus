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
          <div class="flex mb-1">
            <div class="pt-2.5 pb-2 px-6 text-base border border-1 border-gray-800 rounded-md ">
              <a href=" {{route('admin.caremanager.create')}}">
                <div class="flex justify-center items-center">
                  <p class="w-4 h-4 mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M240 64c0-8.8-7.2-16-16-16s-16 7.2-16 16V240H32c-8.8 0-16 7.2-16 16s7.2 16 16 16H208V448c0 8.8 7.2 16 16 16s16-7.2 16-16V272H416c8.8 0 16-7.2 16-16s-7.2-16-16-16H240V64z"/></svg>
                  </p>
                  <p class="pl-4">{{ __('ケアマネ新規登録') }}</p>
                </div>
              </a>
            </div>
          </div>
          <div class='flex justify-end mb-4'>
            <form>
              <div class='text-sm'>
                <input type="search" class="w-60 border border-1 border-gray-600 rounded-sm text-sm" name="search" value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
                <input type="submit" value="検索" class="ml-3 mr-1">
                <button>
                  <a href="{{ route('admin.caremanager.index') }}" class="">
                    クリア
                  </a>
                </button>
              </div>
            </form>
          </div>
          <section class="text-gray-600 body-font">
            <table class=" text-center w-full border-collapse">
              <thead>
                <tr>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">名前</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">ステーション名</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">住所</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">電話番号</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300">FAX番号</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base  border border-1 border-gray-300"></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($caremanagers as $caremanager)
                <tr class="hover:bg-grey-lighter">
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->caremanager_name }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->belong }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->address }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->tel }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $caremanager->fax }}</td>
                  <td class="border border-1 border-gray-300">
                    <!-- 更新ボタン -->
                    <form action=" {{ route('admin.caremanager.edit',$caremanager->id) }}" method="GET" class="text-center">
                      @csrf
                      <button type="submit">編集</button>
                    </form>
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
