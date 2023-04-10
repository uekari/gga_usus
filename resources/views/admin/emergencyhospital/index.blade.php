<x-app-layout>
  <x-slot name="header">
    <div class="mb-6 ml-1">
      <a href="{{ route('admin.schedule.index') }}">
        <p class="w-5 h-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 432c0 8.8 7.2 16 16 16s16-7.2 16-16L32 80c0-8.8-7.2-16-16-16S0 71.2 0 80L0 432zM100.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l128 128c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L150.6 272 256 272l176 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-176 0-105.4 0L251.3 139.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-128 128z"/></svg></p>
      </a>
    </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('緊急連絡先一覧') }}
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

                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">病院名</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">担当者</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">住所</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">TEL</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">FAX</th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                  <th class="px-4 py-4 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>

                </tr>
              </thead>
              <tbody>
                @foreach ($hospitals as $hospital)
                <tr class="hover:bg-grey-lighter">
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $hospital->hospital }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $hospital->name }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $hospital->address }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $hospital->tel }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $hospital->fax }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <!-- 更新ボタン -->
                    <a href="{{  route('admin.emergencyhospital.edit',[$hospital->schedule_id, $hospital->id])}}">
                      <p>編集</p>
                    </a>
                  </td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <!-- 削除ボタン -->
                    <form action="{{  route('admin.emergencyhospital.destroy',[$hospital->schedule_id, $hospital->id])}}" method="POST">
                      @method('delete')
                      @csrf
                      <button type="submit">削除</button>
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
