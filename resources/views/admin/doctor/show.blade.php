<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('病院詳細') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="mb-6">
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">病院名</p>
              <p class="py-2 px-3 text-grey-darkest" id="hospital_name">
                {{$hospital->hospital_name}}
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">住所</p>
              <p class="py-2 px-3 text-grey-darkest" id="address">
                {{$hospital->address}}
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">電話番号</p>
              <p class="py-2 px-3 text-grey-darkest" id="tel">
                {{$hospital->tel}}
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">FAX番号</p>
              <p class="py-2 px-3 text-grey-darkest" id="fax">
                {{$hospital->fax}}
              </p>
            </div>
            <a href="{{ url()->previous() }}" class="block text-center w-full py-3 mt-6 font-medium tracking-widest text-black uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              戻る
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
