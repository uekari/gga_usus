<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('医師情報一覧') }}
    </h2>
  </x-slot>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="hidden space-x-8 mb-6 sm:flex">
            <div class="pt-2.5 pb-2 px-6 text-base border border-1 border-gray-800 rounded-md ">
              <a href=" {{route('admin.doctor.create')}}">
                {{ __('医師新規登録') }}
              </a>
            </div>
          </div>
          <section class="text-gray-600 body-font">
            <table class="text-center w-full border-collapse">
              <thead>
                <tr>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">id</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">名前</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">病院名</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">住所</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">電話番号</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">FAX番号</th>
                  <th class="px-4 py-3 title-font tracking-wider font-bold text-gray-900 text-base border border-1 border-gray-300">修正</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($doctors as $doctor)
                <tr class="hover:bg-grey-lighter">
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $doctor->id }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $doctor->doctor_name }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $doctor->belong }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $doctor->address }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $doctor->tel }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">{{ $doctor->fax }}</td>
                  <td class="px-4 py-3 text-base border border-1 border-gray-300">
                    <!-- 更新ボタン -->
                    <form action="{{ route('admin.doctor.edit',$doctor->id) }}" method="GET" class="text-center">
                      @csrf
                      <button type="submit" class="mr-2 ml-2 text-sm hover:bg-gray-200 hover:shadow-none text-white py-1 px-2 focus:outline-none focus:shadow-outline">
                        <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="black">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                      </button>
                    </form>
                    <!-- 削除ボタン(表示させない)-->
                    <!-- <form action="{{ route('admin.doctor.destroy',$doctor->id) }}" method="POST" class="text-left">
                    @method('delete')
                    @csrf
                    <button type="submit" class="mr-2 ml-2 text-sm hover:bg-gray-200 hover:shadow-none text-white py-1 px-2 focus:outline-none focus:shadow-outline">
                      <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="black">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </form> -->
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
