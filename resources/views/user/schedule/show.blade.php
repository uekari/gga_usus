<x-app-layout>
  <div class="sm:mt-12 pb-20">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="p-6 bg-appColor rounded-lg">
          <div class="mb-6 ml-1">
            <a href="{{ url()->previous() }}">
              <p class="w-4 h-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M4.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l176 176c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 272 432 272c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 240 203.3 91.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-176 176z" />
                </svg>
              </p>
            </a>
          </div>
          <div class="mb-6 ">
            <div class="text-gray-900">
              <div class="mb-4 flex flex-col items-center content-center">
                <p class="pb-2 text-2xl text-center font-bold">{{ $schedule->title }}</p>
                <p class="pb-2 text-center">{{ date('Y/m/d', strtotime($schedule->date)) }}</p>
                <div class="flex content-center items-center my-3  py-2 px-4 rounded-full bg-white">
                  <p class="text-center pr-2">持ち物リスト</p>
                  <div class="w-3 h-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path
                        d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z" />
                    </svg>
                  </div>
                </div>
              </div>

              {{-- {{ddd($schedule->destinations)}} --}}
              {{-- 各目的地 --}}
              @foreach ($destinations as $destination)
                {{-- @if ($loop->index < count($destinations) && $destinations[$loop->index]->address) --}}
                <div
                  class=" rounded bg-white {{ !($loop->index < count($destinations) - 1 && $destinations[$loop->index + 1]->address) ? 'mb-3' : '' }}">
                  {{-- @endif --}}
                  <div class="flex  justify-between items-center ">
                    <div class="py-2 flex justify-center items-center">
                      <div class="w-[60px] flex justify-center items-center">
                        <p>{{ substr($destination->time, 0, 5) }}</p>
                      </div>
                      <p class="text-lg">{{ $destination->content }}</p>
                    </div>

                    {{-- 住所があればアイコン表示 --}}
                    @if ($destination->address)
                      <div class="flex justify-center items-center px-3">
                        {{-- 住所urlは住所指定できない地点にいくかもしれないから一応db上残しておく。 --}}
                        {{-- <a href="{{ $destination->url }}" target='_blank'> --}}
                        <a href="https://www.google.co.jp/maps/place/{{ $destination->address }}" target='_blank'>
                          <div class="w-3 h-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                              <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                              <path
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                          </div>
                        </a>
                      </div>
                    @endif
                  </div>
                  {{-- リストの下に表示する情報 --}}
                  {{-- ($loop->index < count($destinations) - 1 && $destinations[$loop->index + 1]->address) 次の行き先に住所が設定されていたら移動にする。 --}}
                  @if (count($destination->risks) > 0 || count($destination->treatments) > 0)
                    <div class="ml-[60px] pb-3">
                      {{-- 処置 --}}
                      @if ($destination->treatments)
                        <div class="flex">
                          @foreach ($destination->treatments as $treatment)
                            <div class="px-2 mr-2  mb-2 text-sm border border-1 border-gray-500 rounded">
                              <a href="{{ route('user.treatment.show', $treatment->id) }}">{{ $treatment->title }}</a>
                            </div>
                          @endforeach
                        </div>
                      @endif
                      {{-- 注意事項 --}}
                      @if (count($destination->risks) > 0)
                        <div class="w-full mb-1">
                          <a href="{{ route('user.destination.show', $destination->id) }}">
                            <div class="flex items-center text-sm">
                              <p class="mr-1">注意事項あり</p>
                              <p class='flex justify-center items-center w-4 h-4 bg-black rounded-full'>
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                  <path fill="#ffffff"
                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                </svg>
                              </p>
                            </div>
                          </a>
                        </div>
                      @endif
                    </div>
                  @endif
                  {{-- @if ($loop->index < count($destinations) - 1 && $destinations[$loop->index + 1]->address) --}}
                </div>
                {{-- @endif --}}

                @if ($loop->index < count($destinations) - 1 && $destinations[$loop->index + 1]->address)
                  <div class="ml-8 move_border">
                    {{-- 移動あり --}}
                    @if ($loop->index < count($destinations) - 1 && $destinations[$loop->index + 1]->address)
                      <div class="flex items-center content-center">
                        <p class="py-8 pl-4 text-sm ">移動</p>
                        <svg class="ml-4" width="34" height="20" viewBox="0 0 34 20" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1112_23287)">
                            <path
                              d="M29.6335 0.0182002L14.7111 0L6.98451 0.0222447C-0.252051 0.0424671 -0.000895005 9.80789 -0.000895005 9.80789V17.5086C-0.000895005 17.5086 0.0379014 18.18 0.938388 18.18H1.56322C1.48562 17.8888 1.4407 17.5854 1.4407 17.27C1.4407 15.3104 3.04565 13.7209 5.02427 13.7209C7.00289 13.7209 8.60784 15.3104 8.60784 17.27C8.60784 17.5854 8.56291 17.8888 8.48532 18.18H26.4358C26.3582 17.8888 26.3133 17.5854 26.3133 17.27C26.3133 15.3104 27.9183 13.7209 29.8969 13.7209C31.8755 13.7209 33.4805 15.3104 33.4805 17.27C33.4805 17.549 33.4457 17.818 33.3845 18.0768C33.748 17.9029 34.0011 17.5268 34.0011 17.088V5.43984C33.9991 0.786653 30.9342 0.101112 29.6335 0.0182002Z"
                              fill="#CE5348" />
                            <path
                              d="M5.02612 20.0001C6.54855 20.0001 7.78271 18.7778 7.78271 17.2701C7.78271 15.7623 6.54855 14.54 5.02612 14.54C3.5037 14.54 2.26953 15.7623 2.26953 17.2701C2.26953 18.7778 3.5037 20.0001 5.02612 20.0001Z"
                              fill="#484F4F" />
                            <path
                              d="M29.8953 20.0001C31.4177 20.0001 32.6519 18.7778 32.6519 17.2701C32.6519 15.7623 31.4177 14.54 29.8953 14.54C28.3728 14.54 27.1387 15.7623 27.1387 17.2701C27.1387 18.7778 28.3728 20.0001 29.8953 20.0001Z"
                              fill="#484F4F" />
                            <path
                              d="M6.679 17.2699C6.679 16.3659 5.93779 15.6318 5.02505 15.6318C4.11231 15.6318 3.37109 16.3659 3.37109 17.2699C3.37109 18.1738 4.11231 18.9079 5.02505 18.9079C5.93779 18.9079 6.679 18.1738 6.679 17.2699Z"
                              fill="#7C8285" />
                            <path
                              d="M31.5501 17.2699C31.5501 16.3659 30.8089 15.6318 29.8961 15.6318C28.9834 15.6318 28.2422 16.3659 28.2422 17.2699C28.2422 18.1738 28.9834 18.9079 29.8961 18.9079C30.8089 18.9079 31.5501 18.1738 31.5501 17.2699Z"
                              fill="#7C8285" />
                            <path
                              d="M13.1231 9.27423C13.2497 9.27423 13.3518 9.14076 13.3518 8.97696C13.3518 8.81316 13.2497 8.67969 13.1231 8.67969H12.0021C11.8755 8.67969 11.7734 8.81316 11.7734 8.97696C11.7734 9.14076 11.8755 9.27423 12.0021 9.27423H13.1231Z"
                              fill="#D5D8DD" />
                            <path
                              d="M15.9981 9.27423C16.1247 9.27423 16.2268 9.14076 16.2268 8.97696C16.2268 8.81316 16.1247 8.67969 15.9981 8.67969H14.8771C14.7505 8.67969 14.6484 8.81316 14.6484 8.97696C14.6484 9.14076 14.7505 9.27423 14.8771 9.27423H15.9981Z"
                              fill="#D5D8DD" />
                            <path
                              d="M34 12.9948V8.88965H33.1097C32.9076 8.88965 32.7422 8.97054 32.7422 9.06761V12.8148C32.7422 12.9139 32.9076 12.9928 33.1097 12.9928H34V12.9948Z"
                              fill="#FCD932" />
                            <path
                              d="M23.1786 0.92229C19.0008 0.916223 14.7148 0.910156 14.7148 0.910156V7.50065H23.0418C23.2276 7.50065 23.3787 7.33685 23.3787 7.13665V1.25394C23.3787 1.10631 23.297 0.978913 23.1786 0.92229Z"
                              fill="#D6EDF8" />
                            <path d="M2.3165 3.71484C1.63042 4.93223 1.27921 6.34376 1.10156 7.50049H2.3165V3.71484Z"
                              fill="#D6EDF8" />
                            <path
                              d="M6.98653 0.932263C5.53881 0.936307 4.37492 1.37109 3.43359 2.25683V7.50051H13.6371V0.914062L6.98653 0.932263Z"
                              fill="#D6EDF8" />
                            <path
                              d="M0.0714672 13.541C0.679959 13.541 1.1741 12.8433 1.1741 11.9839C1.1741 11.1244 0.682001 10.4268 0.0714672 10.4268C0.0469641 10.4268 0.024503 10.4308 0 10.4328V13.5349C0.024503 13.537 0.0469641 13.541 0.0714672 13.541Z"
                              fill="#FCD932" />
                            <path
                              d="M31.209 9.23176C31.209 9.43196 31.0619 9.59576 30.8782 9.59576H24.0847C23.9009 9.59576 23.7539 9.43196 23.7539 9.23176V9.04369C23.7539 8.84349 23.9009 8.67969 24.0847 8.67969H30.8782C31.0599 8.67969 31.209 8.84349 31.209 9.04369V9.23176Z"
                              fill="#D5D8DD" />
                            <path
                              d="M1.55558 4.90437C1.02264 4.90437 0.591797 5.60811 0.591797 6.47767C0.591797 6.99941 0.749025 7.46251 0.987929 7.74764V8.70416C0.987929 8.78101 1.05123 8.8437 1.13086 8.8437C1.2105 8.8437 1.27176 8.78101 1.27176 8.70416V7.9802C1.3616 8.02469 1.45757 8.04896 1.55558 8.04896C2.08852 8.04896 2.51937 7.34522 2.51937 6.47565C2.51937 5.60609 2.08852 4.90234 1.55558 4.90234V4.90437Z"
                              fill="#D5D8DD" />
                          </g>
                          <defs>
                            <clipPath id="clip0_1112_23287">
                              <rect width="34" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    @endif
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
