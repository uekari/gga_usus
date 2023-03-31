<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('緊急連絡先一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <table class="text-center w-full border-collapse">
            <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">連絡場所</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">担当者</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">電話番号</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($emergencys as $emergency)
              <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light">
                    <h3 class="text-left font-bold text-lg text-grey-dark">{{$emergency->doctor_id}}</h3>
                </td>
                <td class="py-4 px-6 border-b border-grey-light">
                    <h3 class="text-left font-bold text-lg text-grey-dark">{{$emergency->emergency}}</h3>
                </td>
                <td class="py-4 px-6 border-b border-grey-light">
                    <h3 class="text-left font-bold text-lg text-grey-dark">{{$emergency->emergency}}</h3>
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

