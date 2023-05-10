<x-app-layout>
  <div class="sm:mt-12 pb-20">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="p-6 bg-white">
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
          <div class="mb-6">
            <div class="text-gray-900">
              <div class="mb-4 flex flex-col items-center content-center">
                <p class="pb-2 text-2xl text-center font-bold">{{ $schedule->title }}</p>
                <p class="pb-2 text-center">{{ date('Y/m/d', strtotime($schedule->date)) }}</p>
                <div class="flex content-center items-center my-3  py-2 px-4 rounded-full border border-1 border-gray-600">
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
                  class="border border-1 border-gray-200 rounded {{ !($loop->index < count($destinations) - 1 && $destinations[$loop->index + 1]->address) ? 'mb-3' : '' }}">
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
                    <div class="ml-[60px] mb-3">
                      {{-- 注意事項 --}}
                      @if (count($destination->risks) > 0)
                        <div class="w-full mb-1">
                          <a href="{{ route('user.destination.show', $destination->id) }}">
                            <div class="flex items-center text-sm">
                              <p class="mr-1">注意事項あり</p>
                              <p class='flex justify-center items-center w-3 h-3 bg-amber-500  rounded-full'>
                                <svg class="w-2 h-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                  <path fill="#ffffff"
                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                </svg>
                              </p>
                            </div>
                          </a>
                        </div>
                      @endif

                      {{-- 処置 --}}
                      @if ($destination->treatments)
                        <div class="flex">
                          @foreach ($destination->treatments as $treatment)
                            <div class="mr-4 pt-0.5 px-2 text-sm border border-1 border-gray-900 rounded-full">
                              <a href="{{ route('user.treatment.show', $treatment->id) }}">{{ $treatment->title }}</a>
                            </div>
                          @endforeach
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
                      <p class="py-8 pl-4 text-sm ">移動あり</p>
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
