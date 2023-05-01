<x-app-layout>
  <x-slot name="header">
    <div class="mb-6 ml-1">
      <a href="{{ route('admin.schedule.index') }}">
        <p class="w-5 h-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M0 432c0 8.8 7.2 16 16 16s16-7.2 16-16L32 80c0-8.8-7.2-16-16-16S0 71.2 0 80L0 432zM100.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l128 128c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L150.6 272 256 272l176 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-176 0-105.4 0L251.3 139.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-128 128z" />
          </svg></p>
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
          <form class="mb-6" action="{{ route('admin.destination.store', $schedule->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40" for="content">行動</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="content"
                id="content">
            </div>

            <div class="flex items-center mb-8 text-gray-900">
              <label class="w-40" for="time">時間</label>
              <input class="w-80 border border-1 border-gray-300 py-2 px-3" type="time" name="time" id="time"
                list="data-list">
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
              <label class="w-40" for="address">住所</label>
              <input class="flex-auto border border-1 border-gray-300 py-2 px-3 " type="text" name="address"
                id="address">
            </div>

            <div id="risk_area">
              <div>
                <div class="flex items-center mb-4 text-gray-900">
                  <label class="w-40" for="risk_title1">リスク情報の登録</label>
                  <input class="flex-auto border border-1 border-gray-300 py-2 px-3" type=" text" name="risk_title[]"
                    id="risk_title1">
                </div>
                <div class="flex items-center mb-4 text-gray-900">
                  <label class="w-40" for="risk_content1"> </label>
                  <textarea name="risk_content[]" id="risk_content1" cols="30" rows="5"
                    class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
                </div>

                <div>
                  <div class="flex items-center mb-8 text-gray-900">
                    <div class="w-40"></div>
                    <label
                      class="bg-gray-200 p-2 rounded outline-gray-400 cursor-pointer border border-1 border-gray-300"
                      for="risk1_img">ファイルを選択</label>
                    <input class="hidden" type="file" id="risk1_img" multiple name="risk1_img[]"
                      onchange="previewImage(this,1);">
                  </div>
                  <div class="flex items-center mb-8 text-gray-900">
                    <div class="w-40"></div>
                    <div id="preview1" class="hidden grid-cols-2 gap-3"></div>
                  </div>
                </div>
              </div>
            </div>

            <div id="add_risk" class="flex  justify-center items-center mb-12" onclick="addRiskElement();">
              <p class=" bg-black text-white  py-2 px-4">+ リスクの入力項目追加</p>
            </div>

            <div class="text-center">
              <button type="submit"
                class="pt-2.5 pb-2 px-12 text-base border border-1 border-gray-800 rounded-md ">登録を完了する</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    let riskCounter = 2;
    const addRiskElement = () => {
      let element = `
        <div>
          <div class="flex items-center mb-8 text-gray-900">
            <label class="w-40" for="risk_title${riskCounter}">リスク情報の登録</label>
            <input class="flex-auto border border-1 border-gray-300 py-2 px-3" type="text" name="risk_title[]"
              id="risk_title${riskCounter}" value="">
          </div>
          <div class="flex items-center mb-8 text-gray-900">
            <label class="w-40" for="risk_content${riskCounter}""> </label>
            <textarea name="risk_content[]" id="risk_content${riskCounter}" cols="30" rows="5"
              class="flex-auto border border-1 border-gray-300 py-2 px-3"></textarea>
          </div>
          <div>
            <div class="flex items-center mb-8 text-gray-900">
              <div class="w-40"></div>
              <label
                class="bg-gray-200 p-2 rounded outline-gray-400 cursor-pointer border border-1 border-gray-300"
                for="risk${riskCounter}_img">ファイルを選択</label>
              <input class="hidden" type="file" id="risk${riskCounter}_img" multiple name="risk${riskCounter}_img[]"
                onchange="previewImage(this,${riskCounter});">
            </div>
            <div class="flex items-center mb-8 text-gray-900">
              <div class="w-40"></div>
              <div id="preview${riskCounter}" class="hidden grid-cols-2 gap-3"></div>
            </div>
          </div>
        </div>
        `;
      $("#risk_area").append(element);
      riskCounter++;
    }

    function previewImage(input, preview_id) {
      const preview = $(`#preview${preview_id}`);

      if (input.files) {
        const fileList = input.files;

        // 既存のプレビュー画像を削除
        preview.html("");

        // ファイルリスト内のすべての画像をプレビュー表示
        for (let i = 0; i < fileList.length; i++) {
          const file = fileList[i];
          let imgElement;
          console.log(file);
          if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.onload = function(e) {
              imgElement = `<img class="object-contain h-32 w-full p-2" src="${e.target.result}"/>`
              preview.append(imgElement);
            };
            reader.readAsDataURL(file);


          }
        }
        preview.removeClass("hidden");
        preview.addClass("grid");
      } else {
        preview.removeClass("grid");
        preview.addClass("hidden");
      }
    }
  </script>
</x-app-layout>
