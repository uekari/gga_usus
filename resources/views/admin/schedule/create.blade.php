<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('旅行情報登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="py-12 px-16 bg-white ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.schedule.store',$client->id) }}" method="POST">
            @csrf
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="date">旅行日</label>
              <input class="w-80 border border-1 border-gray-300 py-2 px-3 " type="date" name="date" id="date" value="<?php echo date('Y-m-j');?>">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="title">旅行名</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="title" id="title">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="user_id">サポーター</label>

              <select class="w-80 border border-1 border-gray-300 py-2 px-3" name="user_id">
                @foreach ($users as $user)
                <option id="user_id" value=" {{$user -> id}}">{{$user -> name}}</option>
                @endforeach
              </select>
            </div>
            <div class="text-center">
              <button type=" submit" class="pt-2.5 pb-2 px-6 text-base border border-1 border-gray-800 rounded-md ">登録を完了する</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
