<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('スケジュール編集') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.time.update',$time->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">予定</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="content" id="content" value="{{$time->content}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">時間</label>
              <input class="border py-2 px-3 text-grey-darkest" type="time" name="time" id="time" list="data-list" value="{{$time->time}}">
              <span></span>
              <datalist id="data-list">
                <option value="08:00"></option>
                <option value="08:30"></option>
                <option value="09:00"></option>
                <option value="09:30"></option>
                <option value="10:00"></option>
                <option value="10:30"></option>
                <option value="11:00"></option>
                <option value="11:30"></option>
                <option value="12:00"></option>
                <option value="12:30"></option>
              </datalist>
            </div>
            <div class="flex flex-col mb-4">
              <div class="form-group row">
                <div class="col-md-6">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_move" id="is_move1" value="1">移動あり
                    <input class="form-check-input" type="radio" name="is_move" id="is_move2" value="2">移動なし
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_title1">リスク：タイトル</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_title1" id="risk_title1" value="{{$time->risk_title1}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_content1">リスク：内容</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_content1" id="risk_content1" value="{{$time->risk_content1}}">
            </div>
            <div class="col-md-6">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_img1">リスク①：画像</label>
              @if ($time->risk_img1 !=='')
              <img src="{{ Storage::url($time->risk_img1) }}" width="50%">
              @else
              @endif
              <input type="file" id="risk_img1" name="risk_img1">
            </div>

            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_title2">リスク：タイトル</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_title2" id="risk_title2" value="{{$time->risk_title2}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_content2">リスク：内容</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_content2" id="risk_content2" value="{{$time->risk_content2}}">
            </div>
            <div class="col-md-6">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_img2">リスク②：画像</label>
              @if ($time->risk_img2 !=='')
              <img src="{{ Storage::url($time->risk_img2) }}" width="50%">
              @else
              @endif
              <input type="file" id="risk_img2" name="risk_img2">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_title3">リスク：タイトル</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_title3" id="risk_title3" value="{{$time->risk_title3}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_content3">リスク：内容</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_content3" id="risk_content3" value="{{$time->risk_content3}}">
            </div>
            <div class="col-md-6">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_img3">リスク③：画像</label>
              @if ($time->risk_img3 !=='')
              <img src="{{ Storage::url($time->risk_img3) }}" width="50%">
              @else
              @endif
              <input type="file" id="risk_img3" name="risk_img3">
            </div>
            <button type="submit" class="w-5/12 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              Update
            </button>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</x-app-layout>
