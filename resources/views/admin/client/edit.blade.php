<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('患者編集') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.client.update',$client->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="client_name">患者氏名</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="client_name" id="client_name" value="{{$client->client_name}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="client_name2">ふりがな</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="client_name2" id="client_name2" value="{{$client->client_name2}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="age">年齢</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="age" id="age" value="{{$client->age}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="desease">疾患</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="desease" id="desease" value="{{$client->desease}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="carelevel">介護度</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="carelevel" id="carelevel" value="{{$client->carelevel}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="treatment_title">処置：項目</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="treatment_title" id="treatment_title" value="{{$client->treatment_title}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="treatment_content">処置：手順</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="treatment_content" id="treatment_content" value="{{$client->treatment_content}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="treatment_point">処置：注意点</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="treatment_point" id="treatment_point" value="{{$client->treatment_point}}">
            </div>
            <div class="flex justify-evenly">
              <a href="{{ url()->previous() }}" class="block text-center w-5/12 py-3 mt-6 font-medium tracking-widest text-black uppercase bg-gray-100 shadow-sm focus:outline-none hover:bg-gray-200 hover:shadow-none">
                Back
              </a>
              <button type="submit" class="w-5/12 py-3 mt-6 font-medium tracking-widest text-black uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                Update
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
