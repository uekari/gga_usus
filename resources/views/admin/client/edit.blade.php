<x-app-layout>
  <x-slot name="header">
    <div class="mb-6 ml-1">
      <a href="{{ route('admin.client.index') }}">
        <p class="w-5 h-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 432c0 8.8 7.2 16 16 16s16-7.2 16-16L32 80c0-8.8-7.2-16-16-16S0 71.2 0 80L0 432zM100.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l128 128c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L150.6 272 256 272l176 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-176 0-105.4 0L251.3 139.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-128 128z"/></svg></p>
      </a>
    </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('患者編集') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="py-12 px-16 bg-white ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.client.update',$client->id) }}" method="POST">
            @method('put')
            @csrf

            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="client_name">患者名</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="client_name" id="client_name" value="{{$client->client_name}}">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="client_name2">ふりがな</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="client_name2" id="client_name2" value="{{$client->client_name2}}">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="age">年齢</label>
              <input class="w-80 border border-1 border-gray-300 py-2 px-3 " type="text" name="age" id="age" value="{{$client->age}}">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="desease">疾患</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="desease" id="desease" value="{{$client->desease}}">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="carelevel">介護度</label>
              <input class="w-80 border border-1 border-gray-300 py-2 px-3 " type="text" name="carelevel" id="carelevel" value="{{$client->carelevel}}">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="doctor_id">主治医</label>
              <select name="doctor_id" class="w-80 border border-1 border-gray-300 py-2 px-3">
                @foreach ($doctors as $doctor)
                <option id="doctor_id" value=" {{$doctor -> id}}">{{$doctor -> doctor_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="caremanager_id">ケアマネ</label>
              <select name="caremanager_id" class="w-80 border border-1 border-gray-300 py-2 px-3">
                @foreach ($caremanagers as $caremanager)
                <option id="caremanager_id" value=" {{$caremanager -> id}}">{{$caremanager -> caremanager_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="user_id">サポーター</label>
              <select name="user_id" class="w-80 border border-1 border-gray-300 py-2 px-3">
                @foreach ($users as $user)
                <option id="caremanager_id" value=" {{$caremanager -> id}}">{{$user -> name}}</option>
                @endforeach
              </select>
            </div>
            <div class="text-center">
              <button type=" submit" class="pt-2.5 pb-2 px-12 text-base border border-1 border-gray-800 rounded-md ">編集を完了する</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
