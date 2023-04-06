<x-app-layout>
  <x-slot name="header">
    <div class="mb-6 ml-1">
      <a href="{{ route('admin.time.index',$time->id) }}">
        <p class="w-5 h-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 432c0 8.8 7.2 16 16 16s16-7.2 16-16L32 80c0-8.8-7.2-16-16-16S0 71.2 0 80L0 432zM100.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l128 128c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L150.6 272 256 272l176 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-176 0-105.4 0L251.3 139.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-128 128z"/></svg></p>
      </a>
    </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('時間毎の処置') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="flex mb-4">
            <p class="mr-5 ">{{ substr($time->time, 0, 5) }}</p>
            <p>{{$time -> content}}</p>
          </div>


          <form class="mb-6" action="{{ route('admin.timetreatment.store',[$time->schedule_id, $time->id])}}" method="POST">
            @csrf
            <div class="flex">
              @foreach($treatments as $treatment)
              <div class="mr-5">
                <input class="" type="checkbox" id="{{$treatment->id}}" name="treatment[]" value="{{$treatment->id}}" @if($time->treatments->contains(fn($t) => $t->id == $treatment->id))checked @endif >
                <label class="ml-1" for="{{$treatment->id}}">{{$treatment->title}}</label>
              </div>
              @endforeach
            </div>

            <div class="text-center pt-8">
              <button type=" submit" class="pt-2.5 pb-2 px-12 text-base border border-1 border-gray-800 rounded-md ">登録を完了する</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
