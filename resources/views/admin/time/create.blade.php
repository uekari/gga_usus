<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('案件詳細登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-whi  te overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('admin.time.store',$schedule->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">行き先</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="content" id="content">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">時間</label>
              <input class="border py-2 px-3 text-grey-darkest" type="time" name="time" id="time" list="data-list">
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
              <!-- <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">移動の有無</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="is_move" id="is_move"> -->
              <div class="form-group row">
                <div class="col-md-6">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="is_move1" name="is_move" value="1">
                    <label class="form-check-label" for="is_move1">移動あり</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="is_move2" name="is_move" value="2">
                    <label class="form-check-label" for="is_move2">移動なし</label>
                  </div>

                </div>
              </div>
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_title1">リスク：タイトル</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_title1" id="risk_title1">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_content1">リスク：内容</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_content1" id="risk_content1">
            </div>
            <label for="image">画像</label>
            <div class="col-md-6">
              <input type="file" id="image" name="image">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_title2">リスク：タイトル</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_title2" id="risk_title2">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_content2">リスク：内容</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_content2" id="risk_content2">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_title3">リスク：タイトル</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_title3" id="risk_title3">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="risk_content3">リスク：内容</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="risk_content3" id="risk_content3">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="treatment_title1">処置1</label>
              <select name="treatment_title1">
                <option value="吸引">吸引</option>
                <option value="投薬">投薬</option>
                <option value="経管栄養">経管栄養</option>
                <option value="摘便">摘便</option>
              </select>
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="treatment_title2">処置2</label>
              <select name="treatment_title2">
                <option value="吸引">吸引</option>
                <option value="投薬">投薬</option>
                <option value="経管栄養">経管栄養</option>
                <option value="摘便">摘便</option>
              </select>
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="treatment_title3">処置3</label>
              <select name="treatment_title3">
                <option value="吸引">吸引</option>
                <option value="投薬">投薬</option>
                <option value="経管栄養">経管栄養</option>
                <option value="摘便">摘便</option>
              </select>
            </div>
        </div>

        <button type=" submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">登録</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</x-app-layout>
