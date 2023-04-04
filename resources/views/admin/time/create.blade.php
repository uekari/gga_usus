<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('スケジュール登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.time.store',$schedule->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40" for="content">行き先：</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="content" id="content">
            </div>


            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40" for="time">時間：</label>
              <input class="w-80 border border-1 border-gray-300 py-2 px-3" type="time" name="time" id="time" list="data-list">
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


            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40" for="time">移動：</label>
              <div class="form-group row">
                <div class="col-md-6">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input mr-2" type="radio" name="is_move" id="is_move1" value="0" checked>あり
                    <input class="form-check-input mr-2" type="radio" name="is_move" id="is_move2" value="1">なし
                  </div>
                </div>
              </div>
            </div>


            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40" for="risk">リスク情報の登録&thinsp;①：</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3" type=" text" name="risk_title1" id="risk_title1">
            </div>
            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40"> </label>
              <textarea name="risk_content1" id="risk_content1" cols="30" rows="5" class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40">画像：</label>
              <input type="file" id="risk_img1" name="risk_img1">
              <!-- <input type="file" id="risk_img1[]" name="risk_img1[]" multiple> -->
            </div>

            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40" for="risk">リスク情報の登録&thinsp;②：</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3" type=" text" name="risk_title2" id="risk_title2">
            </div>
            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40"></label>
              <textarea name="risk_content2" id="risk_content2" cols="30" rows="5" class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40"> </label>
              <input type="file" id="risk_img2" name="risk_img2">
            </div>

            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40" for="risk">リスク情報の登録&thinsp;③：</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3" type=" text" name="risk_title3" id="risk_title3">
            </div>
            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40"></label>
              <textarea name="risk_content3" id="risk_content3" cols="30" rows="5" class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40"> </label>
              <input type="file" id="risk_img3" name="risk_img3">
            </div>
            <div class="text-center">
              <button type=" submit" class="pt-2.5 pb-2 px-12 text-base border border-1 border-gray-800 rounded-md ">登録を完了する</button>
            </div>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>
</x-app-layout>
