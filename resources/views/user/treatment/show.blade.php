<x-app-layout>
 <div class="sm:mt-12 pb-20 pt-24">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg">
        <div class="py-6 px-8 bg-round">
          <section class="text-gray-900 body-font">
            <p class="mb-10 mt-4 text-2xl text-center font-bold"> {{ __('処置 ') }}</p>

            <div class="bg-white p-3 rounded">
              <p class="text-center pr-4 text-2xl"> {{ $treatment->title }}</p>

              <div class="w-full mx-auto overflow-auto">

                <div class="flex flex-col mb-8 py-5 text-gray-900">
                  <div class=mb-6>
                    <p class="mb-1 text-xl">手順</p>
                    <div class=" mb-2 gga_border"></div>

                    <p class="">{{ $treatment->content }}</p>
                  </div>
                  <div>
                    <p class="mb-1 text-xl">注意点</p>
                    <div class="mb-2 gga_border"></div>
                    <p class="">{{ $treatment->point }}</p>
                  </div>
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
