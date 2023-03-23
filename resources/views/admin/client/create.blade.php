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
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="client_name">名前</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="client_name" id="client_name">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="client_name2">ふりがな</label>
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
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="treatment_title">処置：項目</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="treatment_title" id="treatment_title">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="treatment_content">処置：手順</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="treatment_content" id="treatment_content">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="treatment_point">処置：注意点</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="treatment_point" id="treatment_point">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="doctor_id">主治医</label>
              <select name="doctor_id">
                @foreach ($doctors as $doctor)
                <option id="doctor_id" value=" {{$doctor -> id}}">{{$doctor -> doctor_name}}</option>
                @endforeach
              </select>

            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="caremanager_id">ケアマネ</label>
              <select name="caremanager_id">
                @foreach ($caremanagers as $caremanager)
                <option id="caremanager_id" value=" {{$caremanager -> id}}">{{$caremanager -> caremanager_name}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-black uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">登録</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
