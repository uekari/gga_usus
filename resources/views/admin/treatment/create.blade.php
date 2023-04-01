<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('処置登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-whi  te overflow-hidden shadow-sm sm:rounded-lg">
        <div class="py-12  px-16 bg-white ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.treatment.store',$client->id) }}" method="POST">
            @csrf
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="title">項目</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="title" id="title">
            </div>

            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="content">手順</label>
              <textarea name="content" id="content" cols="30" rows="5" class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="point">注意点</label>
              <textarea name="point" id="point" cols="30" rows="5" class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
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
