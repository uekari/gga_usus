<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('時間毎の処置一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <p>{{$time -> time}}</p>
          <p>{{$time -> content}}</p>


          <form class="mb-6" action="{{ route('admin.timetreatment.store',[$time->schedule_id, $time->id])}}" method="POST">
            @csrf
            @foreach($treatments as $treatment)
            <input type="checkbox" id="{{$treatment->id}}" name="treatment[]" value="{{$treatment->id}}" @if($time->treatments->contains(fn($t) => $t->id == $treatment->id))checked @endif >
            <label for="{{$treatment->id}}">{{$treatment->title}}</label>

            @endforeach
            <button type=" submit" class="w-full py-3 mt-6 font-medium tracking-widest text-black uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">登録</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
