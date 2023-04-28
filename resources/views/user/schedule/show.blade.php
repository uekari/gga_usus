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
              <div class="mb-4">
                <p class="pb-2 text-2xl text-center">{{ $schedule->title }}</p>
                <p class="pb-2 text-sm text-center">{{ date('Y/m/d', strtotime($schedule->date)) }}</p>
              </div>

              {{-- 各目的地 --}}
              @foreach ($schedule->destinations as $destination)
                <div class="flex  justify-between items-center mb-1 border border-1 border-gray-200 rounded">
                  <div class="py-2 flex justify-center items-center">
                    <p class="px-3">{{ substr($destination->time, 0, 5) }}</p>
                    <p class="text-lg">{{ $destination->content }}</p>
                  </div>
                  @if ($destination->address)
                    <div class="flex justify-center items-center px-3">
                      <a href="{{ $destination->url }}" target='_blank'>
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
                {{-- ($loop->index < count($schedule->destinations) - 1 && $schedule->destinations[$loop->index + 1]->address) 次の行き先に住所が設定されていたら移動にする。 --}}
                <div class="py-8 pt-0 ml-4 pl-4 {{ ($loop->index < count($schedule->destinations) - 1 && $schedule->destinations[$loop->index + 1]->address) ? "move_border " : "" }}" >
                  {{-- 注意事項 --}}
                  @if (count($destination->risks)>0)
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

                  {{-- 移動あり --}}
                @if (($loop->index < count($schedule->destinations) - 1 && $schedule->destinations[$loop->index + 1]->address) )
                      <p class="py-8 pb-1 text-sm">移動あり</p>
                @endif

                </div>

              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
