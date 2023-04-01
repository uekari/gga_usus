<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('医師登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="py-12  px-16 bg-white ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.doctor.store') }}" method="POST">
            @csrf
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="doctor_name">名前</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="doctor_name" id="doctor_name">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="belong">病院名</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="belong" id="belong">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="address">住所</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="address" id="address">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="tel">電話番号</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="tel" id="tel">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="fax">FAX番号</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="fax" id="fax">
            </div>

            <div class="text-center pt-4">
              <button type=" submit" class="pt-2.5 pb-2 px-12 text-base border border-1 border-gray-800 rounded-md ">登録を完了する</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
