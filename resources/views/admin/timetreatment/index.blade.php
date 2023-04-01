<x-app-layout>
  <x-slot name="header">
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
