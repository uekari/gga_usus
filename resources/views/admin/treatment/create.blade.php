<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('処置登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-whi  te overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.treatment.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">項目</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="item" id="item">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="content">内容</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="content" id="content">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="point">注意点</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="point" id="point">
            </div>

            <input type="text" name="client_id" id="client_id" value="{{$client -> id}}">
            <button type=" submit" class="w-full py-3 mt-6 font-medium tracking-widest text-black uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">登録</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>