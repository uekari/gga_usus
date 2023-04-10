<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            案件一覧
        </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('admin.schedule.index')" :active="request()->routeIs('admin.schedule.index')">
              {{ ('案件管理') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.client.index')" :active="request()->routeIs('admin.client.index')">
              {{ ('患者管理') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.doctor.index')" :active="request()->routeIs('admin.doctor.index')">
              {{ ('医師管理') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.caremanager.index')" :active="request()->routeIs('admin.caremanager.index')">
              {{ ('ケアマネ管理') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.user.index')" :active="request()->routeIs('admin.user.index')">
              {{ ('サポーター管理') }}
            </x-nav-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
