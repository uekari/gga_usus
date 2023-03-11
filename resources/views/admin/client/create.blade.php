<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('患者情報登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-whi  te overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.client.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="client_name">名前(姓)</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="client_name" id="client_name">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="client_name2">名前(名)</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="client_name2" id="client_name2">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="age">年齢</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="age" id="age">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="desease">疾患</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="desease" id="desease">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="carelevel">介護度</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="carelevel" id="carelevel">
            </div>
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-black uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">登録</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
