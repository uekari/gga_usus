<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         リスク一覧
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          <section class="text-gray-600 body-font">
            <div class="container px-5 mx-auto">

              <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                  <div class="flex flex-col mb-4">
                    <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">リスクタイトル</p>
                    <p class="py-2 px-3 text-grey-darkest" id="date">
                {{$time->risk_title1}}
                {{$time->risk_content1}}
                {{$time->risk_title2}}
                {{$time->risk_content2}}
              </p>
                  </div>

                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
