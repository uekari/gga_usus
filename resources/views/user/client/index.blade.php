<x-app-layout>
 <div class="sm:mt-12 pb-20 pt-24">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="p-6 bg-round">

          <section class="text-gray-900 body-font">
            <div class="flex justify-center items-center mb-10 mt-4">
              <p class="pb-2 text-2xl text-center font-bold">  {{ __('患者情報 ') }}</p>
            </div>
            <div class="w-full mx-auto overflow-auto mb-4">
              @foreach ($clients as $clent)
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">名前</p>
                <p class="pb-3 border-b border-1 border-white text-xl">{{ $clent->client_name }}</p>
              </div>
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">疾患</p>
                <p class="pb-3 border-b border-1 border-white text-xl">{{ $clent->desease  }}</p>
              </div>
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">年齢</p>
                <p class="pb-3 border-b border-1 border-white text-xl">{{ $clent->age  }}</p>

              </div>
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">介護度</p>
                <p class="pb-3 border-b border-1 border-white text-xl">{{ $clent->carelevel  }}</p>
              </div>
              @endforeach
              @foreach ($doctors as $doctor)
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">担当医</p>
                <p class="pb-3 border-b border-1 border-white text-xl">{{ $doctor->doctor_name}}</p>
              </div>
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">かかりつけ病院</p>
                <p class="pb-3 border-b border-1 border-white text-xl">{{ $doctor->belong}}</p>
              </div>
              @endforeach
              @foreach ($caremanagers as $caremanager)
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">担当ケアマネ</p>
                <p class="pb-3 border-b border-1 border-white text-xl">{{ $caremanager->caremanager_name}}</p>
              </div>
              <div class="flex flex-col mb-4">
                <p class="mb-2 text-sm">担当事業所</p>
                <p class="pb-3 border-b border-1 border-white text-xl">{{ $caremanager->belong}}</p>
              </div>
              @endforeach

            </div>

          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
