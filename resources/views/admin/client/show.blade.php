<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('患者詳細情報') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="pt-2 pb-4 px-8 bg-white border-b border-gray-200">

          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">患者氏名</p>
            </div>
            <div class=" flex-auto">
              <p class="py-5">{{$client->client_name}}</p>
            </div>
          </div>

          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">ふりがな</p>
            </div>
            <div class=" flex-auto">
              <p class="py-5">{{$client->client_name2}}</p>
            </div>
          </div>

          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">疾患名</p>
            </div>
            <div class=" flex-auto">
              <p class="py-5">{{$client->desease}}</p>
            </div>
          </div>

          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">主治医</p>
            </div>
            <div class=" flex-auto">
              <p class="py-5">{{$client->doctor->doctor_name}}</p>
            </div>
          </div>

          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">ケアマネ</p>
            </div>
            <div class=" flex-auto">
              <p class="py-5">{{$client->caremanager->caremanager_name}}</p>
            </div>
          </div>

          <div class="flex">
            <div class="w-1/5">
              <p class="py-5">サポーター</p>
            </div>
            <div class=" flex-auto">
              <p class="py-5">{{$client->user->name}}</p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</x-app-layout>
