<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('案件詳細登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-whi  te overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.time.store',$schedule->id) }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">行き先</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="content" id="content">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">時間</label>
              <input class="border py-2 px-3 text-grey-darkest" type="time" name="time" id="time" list="data-list">
              <span></span>
              <datalist id="data-list">
                <option value="08:00"></option>
                <option value="08:30"></option>
                <option value="09:00"></option>
                <option value="09:30"></option>
                <option value="10:00"></option>
                <option value="10:30"></option>
                <option value="11:00"></option>
                <option value="11:30"></option>
                <option value="12:00"></option>
                <option value="12:30"></option>
              </datalist>
            </div>
            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">移動の有無</label>
            <input class="border py-2 px-3 text-grey-darkest" type="text" name="is_move" id="is_move">
        </div>

        <button type=" submit" class="w-full py-3 mt-6 font-medium tracking-widest text-black uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">登録</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</x-app-layout>
