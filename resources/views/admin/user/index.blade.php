<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('サポーター情報一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="hidden space-x-8 mb-6 sm:flex">

            <div class="pt-2.5 pb-2 px-6 text-base border border-1 border-gray-800 rounded-md ">
              <a href=" {{route('user.register')}}">
                <div class="flex justify-center items-center">
                  <p class="w-4 h-4 mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M240 64c0-8.8-7.2-16-16-16s-16 7.2-16 16V240H32c-8.8 0-16 7.2-16 16s7.2 16 16 16H208V448c0 8.8 7.2 16 16 16s16-7.2 16-16V272H416c8.8 0 16-7.2 16-16s-7.2-16-16-16H240V64z"/></svg>
                  </p>
                  <p class="pl-4">{{ __('サポーター情報新規登録') }}</p>
                </div>
              </a>
            </div>

          </div>

          <section class="text-gray-600 body-font">
            <table class=" text-center table-auto w-full text-left whitespace-no-wrap">
              <thead>
                <tr>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">サポーター名</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">メールアドレス</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300"></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($users as $user)
                <tr class="hover:bg-grey-lighter">
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $user->name }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $user->email }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <form action="{{ route('admin.user.edit',$user->id) }}" method="GET" class="text-center">
                      @csrf
                      <button type="submit">編集</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
