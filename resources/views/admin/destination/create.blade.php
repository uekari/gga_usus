<x-app-layout>
  <x-slot name="header">
    <div class="mb-6 ml-1">
      <a href="{{ route('admin.schedule.index') }}">
        <p class="w-5 h-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 432c0 8.8 7.2 16 16 16s16-7.2 16-16L32 80c0-8.8-7.2-16-16-16S0 71.2 0 80L0 432zM100.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l128 128c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L150.6 272 256 272l176 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-176 0-105.4 0L251.3 139.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-128 128z"/></svg></p>
      </a>
    </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('案件詳細登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.destination.store',$schedule->id) }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40" for="time">時間</label>
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
              <label class="w-40" for="content">行き先</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="content" id="content">
            </div>

            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40" for="address">住所</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="address" id="address">
            </div>

            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40" for="url">住所URL</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="url" id="url">
            </div>


            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40" for="time">移動</label>
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
              <label class="w-40" for="risk">リスク情報の登録&thinsp;①</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3" type=" text" name="risk_title1" id="risk_title1">
            </div>
            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40"> </label>
              <textarea name="risk_content1" id="risk_content1" cols="30" rows="5" class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40">リスク情報の画像</label>
              <input type="file" id="risk_img1" name="risk_img1">
              <!-- <input type="file" id="risk_img1[]" name="risk_img1[]" multiple> -->
            </div>

            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40" for="risk">リスク情報の登録&thinsp;②</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3" type=" text" name="risk_title2" id="risk_title2">
            </div>
            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40"></label>
              <textarea name="risk_content2" id="risk_content2" cols="30" rows="5" class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40">リスク情報の画像</label>
              <input type="file" id="risk_img2" name="risk_img2">
            </div>

            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40" for="risk">リスク情報の登録&thinsp;③</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3" type=" text" name="risk_title3" id="risk_title3">
            </div>
            <div class="flex items-center mb-4 text-gray-900">
              <label class="w-40"></label>
              <textarea name="risk_content3" id="risk_content3" cols="30" rows="5" class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40">リスク情報の画像</label>
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
