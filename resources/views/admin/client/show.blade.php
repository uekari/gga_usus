<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('患者詳細情報') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="mb-6">
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">患者氏名</p>
              <p class="py-2 px-3 text-grey-darkest" id="client_name">
                {{$client->client_name}}
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">ふりがな</p>
              <p class="py-2 px-3 text-grey-darkest" id="client_name2">
                {{$client->client_name2}}
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">疾患名</p>
              <p class="py-2 px-3 text-grey-darkest" id="desease">
                {{$client->desease}}
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">年齢</p>
              <p class="py-2 px-3 text-grey-darkest" id="age">
                {{$client->age}}
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">介護度</p>
              <p class="py-2 px-3 text-grey-darkest" id="carelevel">
                {{$client->carelevel}}
              </p>
            </div>
            <a href="{{ url()->previous() }}" class="block text-center w-full py-3 mt-6 font-medium tracking-widest text-black uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              Back
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

