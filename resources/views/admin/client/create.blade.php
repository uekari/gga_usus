<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('患者情報登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="py-12  px-16 bg-white ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.client.store') }}" method="POST">
            @csrf
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="client_name">患者名</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="client_name" id="client_name">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="client_name2">ふりがな</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="client_name2" id="client_name2">
            </div>

            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="age">年齢</label>
              <input class="w-80 border border-1 border-gray-300 py-2 px-3 " type="text" name="age" id="age">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="desease">疾患</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="desease" id="desease">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-32" for="carelevel">介護度</label>
              <select name="carelevel" class="w-80 border border-1 border-gray-300 py-2 px-3">
                <option id="carelevel" value="要支援１">要支援１</option>
                <option id="carelevel" value="要支援２">要支援２</option>
                <option id="carelevel" value="要介護１">要介護１</option>
                <option id="carelevel" value="要介護２">要介護２</option>
                <option id="carelevel" value="要介護３">要介護３</option>
                <option id="carelevel" value="要介護４">要介護４</option>
                <option id="carelevel" value="要介護５">要介護５</option>
                <option id="carelevel" value="医療">医療</option>
                <option id="carelevel" value="その他">その他</option>
              </select>
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
                <option id="user_id" value=" {{$user -> id}}">{{$user -> name}}</option>
                @endforeach
              </select>
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
