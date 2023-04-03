<x-app-layout>
  　
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12  ">
      <div class="overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="mb-6">
            <div class="text-gray-900">
              <div class="mb-4">
                <p class="py-6 text-xl text-center">{{$schedule->title}}</p>
              </div>

              @foreach ($schedule->times as $time)
              <div class="mb-6 pt-2 border border-1 border-gray-200 rounded">

                <div class="flex items-center">
                  <p class="py-2 pl-3 w-2/12">{{substr($time->time, 0, 5) }}</p>
                  <div class="flex-auto bg-white">
                    <div class="flex justify-between items-center">
                      <p class="py-2 px-3 w-3/5 text-lg">{{$time->content}}</p>
                      <div class="flex-auto ">
                        @if($time->risk_title1)
                        <a href="{{ route('user.time.show',$time->id )}}">
                          <div class="flex justify-center items-center text-sm">
                            <p class="pr-1">リスクあり</p>
                            <p class="w-4 h-4 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M443.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 240 16 240c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0L244.7 420.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l176-176z"/></・svg>
                        </p>
                          </div>


                        </a>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex">
                  <div class="w-2/12">

                  </div>
                  <div class="pt-1 pb-3 px-3 flex-auto">

                    <div class="flex-auto flex flex-wrap ">
                      @foreach ($time -> treatments as $treatment)
                      <div class="mr-4 pt-0.5 px-2 mb-2 text-sm border border-1 border-gray-900 rounded-full">
                        <a href="{{route('user.treatment.show', $treatment->id )}}">{{ $treatment -> title}}</a>
                      </div>
                      @endforeach
                    </div>

                  </div>
                </div>

              </div>

              <div class="flex">
                      <p>↓&nbsp;：&nbsp;</p>
                      <div class="flex justify-left items-center text-sm">
                        @if($time->is_move !== 0)
                        <p class="pr-2">移動あり</p>
                        <div class="w-4 h-4 mb-3">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M142 203.4l-16.9 63.5c-4.2 15.8-.1 32.7 11 44.8l70.7 77.1c1.8 2 3.1 4.3 3.7 6.9l22 88.1c2.1 8.6 10.8 13.8 19.4 11.6s13.8-10.8 11.6-19.4l-23-92.1c-1.3-5.2-3.9-9.9-7.5-13.9l-49.5-54c-3.8-4.1-5.1-9.9-3.6-15.3l19.3-65.5c1.9-6.5 7.7-11.1 14.5-11.5s13 3.6 15.6 9.8l10.2 24.5c2.2 5.3 5.8 9.9 10.3 13.3l28.5 21.4c7.1 5.3 17.1 3.9 22.4-3.2s3.9-17.1-3.2-22.4l-25-18.8c-2.3-1.7-4.1-4-5.2-6.6l-16.5-39.7c-14.7-35.2-49-58.1-87.1-58.1c-20.5 0-40.8 4.3-59.6 12.6l-5.7 2.5c-30.3 13.5-53.1 39.7-62.2 71.6l-3.7 12.9c-2.4 8.5 2.5 17.4 11 19.8s17.4-2.5 19.8-11l3.7-12.9c6.5-22.8 22.8-41.5 44.4-51.1l5.7-2.5 0 0c1.1-.5 2.2-1 3.4-1.4c5.6-2.3 12.1-1.2 16.6 2.8s6.4 10.3 4.9 16.1zM244 52a36 36 0 1 0 -72 0 36 36 0 1 0 72 0zM118 203c-3.7 1.7-7.3 3.7-10.6 6c-12 8.3-20.9 20.6-24.9 34.9l-3.7 12.9c-4.9 17-22.6 26.8-39.6 22s-26.8-22.6-22-39.6l3.7-12.9c10.4-36.4 36.4-66.4 71.1-81.8l5.7-2.5c20.8-9.2 43.3-14 66.1-14c44.6 0 84.8 26.8 101.9 67.9l16.5 39.7 25 18.8c14.1 10.6 17 30.7 6.4 44.8s-30.7 17-44.8 6.4l-28.5-21.4c-6.9-5.1-12.2-12-15.5-19.9l-.4-1-9.8-23.5-7.2 24.4-12.1 41.2 49.5 54c5.4 5.9 9.2 13 11.2 20.8l23 92.1c4.3 17.1-6.1 34.5-23.3 38.8s-34.5-6.1-38.8-23.3l-22-88.1-70.7-77.1c-14.8-16.1-20.3-38.6-14.7-59.7l11.6-43.6 1.5-5.6 2.5-9.6 1.3-4.8c-1 .4-1.9 .8-2.9 1.2L118 203zM208 0a52 52 0 1 1 0 104A52 52 0 1 1 208 0zM103.4 354.3L83 405.5l-.6 1.5-1.2 1.2L20.7 468.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L105 429.6c3.1-3.1 5.5-6.7 7.1-10.7L127.2 381c1.6-4.1 6.3-6.1 10.4-4.5s6.1 6.3 4.5 10.4l-15.1 37.9c-2.4 6-6 11.5-10.6 16.1L54.6 502.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L68.7 398l19.8-49.6c1.6-4.1 6.3-6.1 10.4-4.5s6.1 6.3 4.5 10.4z" />
                          </svg>
                        </div>
                        @elseif($time->is_move === 0)
                        <p class="pr-2">移動なし</p>
                        @endif
                      </div>
                    </div>

            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</x-app-layout>
