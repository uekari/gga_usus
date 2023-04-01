<x-app-layout>
  <x-slot name="header">
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

            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="caremanager_id">ケアマネ</label>

            </div>
            <div class="flex justify-evenly">
              <a href="{{ url()->previous() }}" class="block text-center w-5/12 py-3 font-medium tracking-widest text-black uppercase bg-gray-100 shadow-sm focus:outline-none hover:bg-gray-200 hover:shadow-none">
                Back
              </a>
              <div class="text-center">
                <button type=" submit" class="pt-2.5 pb-2 px-12 text-base border border-1 border-gray-800 rounded-md ">編集を完了する</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
