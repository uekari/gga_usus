<x-app-layout>
  <div class="mb-16">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden  sm:rounded-lg">
        <div class="p-6 bg-white">

          <section class="text-gray-900 body-font">
            <p class="mb-4 text-xl text-center">  {{$treatment->title}}</p>

            <div class="w-full mx-auto overflow-auto">

              <div class="flex flex-col mb-8 px-4 py-5 text-gray-900">
                <div class=mb-6>
                  <p class="mb-1">手順</p>
                  <div class=" mb-2 gga_border"></div>

                  <p class="text-sm">{{$treatment->content}}</p>
                </div>
                <div>
                  <p class="mb-1">ポイント</p>
                  <div class="mb-2 gga_border"></div>
                  <p class="text-sm">{{$treatment->point}}</p>
                </div>
              </div>


            </div>

        </div>

        </section>
      </div>
    </div>
  </div>
  </div>
</x-app-layout>
