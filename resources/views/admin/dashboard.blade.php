<x-app-layout>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <div class="flex flex-col">
            <div class="flex py-2">
              <p class="w-2/12">
                <x-nav-link :href="route('admin.schedule.index')" :active="request()->routeIs('admin.schedule.index')"> {{ ('案件管理') }}</x-nav-link>
              </p>
              <p class="text-sm">▶︎ 　旅行の案件を管理</p>
            </div>
            <div class="flex py-2">
              <p class="w-2/12">
                <x-nav-link :href=" route('admin.client.index')" :active="request()->routeIs('admin.client.index')">
              {{ ('患者管理') }}
            </x-nav-link>
              </p>
              <p class="text-sm">▶︎ 　患者情報を管理（ 旅行の案件登録はこちらから行う）</p>
            </div>
            <div class="flex py-2">
              <p class="w-2/12">
                <x-nav-link :href="route('admin.doctor.index')" :active="request()->routeIs('admin.doctor.index')">
              {{ ('医師管理') }}
            </x-nav-link>
              </p>
              <p class="text-sm">▶︎ 　医師情報を管理</p>
            </div>
            <div class="flex py-2">
              <p class="w-2/12">
             <x-nav-link :href="route('admin.caremanager.index')" :active="request()->routeIs('admin.caremanager.index')">
              {{ ('ケアマネ管理') }}
            </x-nav-link>
              </p>
              <p class="text-sm">▶︎ 　ケアマネ情報を管理</p>
            </div>
            <div class="flex py-2">
              <p class="w-2/12">
              <x-nav-link :href="route('admin.user.index')" :active="request()->routeIs('admin.user.index')">
              {{ ('サポーター管理') }}
            </x-nav-link>
              </p>
              <p class="text-sm">▶︎ 　サポーター情報を管理</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
