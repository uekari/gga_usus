<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('病院編集') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.hospital.update',$hospital->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="hospital_name">病院名</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="hospital_name" id="hospital_name" value="{{$hospital->hospital_name}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="address">住所</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="address" id="address" value="{{$hospital->address}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="tel">電話番号</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="tel" id="tel" value="{{$hospital->tel}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="fax">FAX番号</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="fax" id="fax" value="{{$hospital->fax}}">
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