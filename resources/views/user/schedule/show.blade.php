<x-app-layout>
  <div class="sm:mt-12 pb-20">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="p-6 bg-white">
          <div class="mb-6 ml-1">
            <a href="{{ url()->previous() }}">
              <p class="w-4 h-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M4.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l176 176c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 272 432 272c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 240 203.3 91.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-176 176z"/></svg></p>
            </a>
          </div>
          <div class="mb-6">
            <div class="text-gray-900">
              <div class="mb-4">
                <p class="pb-2 text-2xl text-center">{{$schedule->title}}</p>
                <p class="pb-2 text-sm text-center">{{date('Y/m/d', strtotime($schedule->date))}}</p>
              </div>

              @foreach ($schedule->times as $time)
              <div class="mb-4 border border-1 border-gray-200 rounded">
                <div class="flex justify-between items-center">
                  <div class="flex">
                    <p class="py-2 pl-3 w-16">{{substr($time->time, 0, 5) }}</p>
                    <p class="py-2 text-lg">{{$time->content}}</p>
                    @if($time->url)
                    <div class="py-2 pl-2">
                      <a href="{{$time->url}}" target='_blank'>
                        <div class="w-3 h-3 pt-1">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                              <style>
                              .fa-secondary {
                                opacity: .4
                              }
                              </style>
                            </defs>
                            <path class="fa-primary" d="M160 288A144 144 0 1 0 160 0a144 144 0 1 0 0 288zM96 144c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-53 43-96 96-96c8.8 0 16 7.2 16 16s-7.2 16-16 16c-35.3 0-64 28.7-64 64z" />
                            <path class="fa-secondary" d="M128 284.4V480c0 17.7 14.3 32 32 32s32-14.3 32-32V284.4c-10.3 2.3-21 3.6-32 3.6s-21.7-1.2-32-3.6z" />
                          </svg>
                        </div>
                      </a>
                    </div>
                    @endif
                  </div>
                  @if($time->risk_title1)
                  <div class="pr-2">
                    <a href="{{ route('user.time.show',$time->id )}}">
                      <div class="flex justify-center items-center text-sm">
                        <p class="mr-1">リスクあり</p>
                        <div class="mb-0.5">
                          <p class='w-2.5 h-2.5 bg-amber-500 rounded-full'></p>
                        </div>
                      </div>
                    </a>
                  </div>
                  @endif

                </div>


                <div class="flex ml-16">
                  @foreach ($time -> treatments as $treatment)
                  @if($time->treatments)

                  <div class="mr-4 mb-3 pt-0.5 px-2 text-sm border border-1 border-gray-900 rounded-full">
                    <a href="{{route('user.treatment.show', $treatment->id )}}">{{ $treatment -> title}}</a>
                  </div>


                  @endif
                  @endforeach
                </div>
              </div>

              @if($time->is_move == 0)
              <div class="move_container">
                <div class="move_border"></div>
                <div class="flex items-center text-sm">
                  @if($time->is_move == 0)
                  <p class="pl-4">移動あり</p>
                  @endif
                </div>
              </div>
              @endif

              @endforeach

            </div>
          </div>

        </div>
      </div>
    </div>
</x-app-layout>
