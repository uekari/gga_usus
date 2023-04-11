<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name','SOY旅')}}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">

      <!-- サポーターログイン -->
      <div class="w-4/5 mt-24 mb-24 mx-auto border border-1 border-gray-800 text-gray-900 py-12 text-center">
        @if (Route::has('user.login'))
        <h1 class="title-font text-base sm:text-xl font-semibold pb-4">サポーターログイン</h1>
        <p class="text-xs sm:text-sm pb-12">サポーターの方は<br class="block sm:hidden">こちらからログインしてください</p>
        <div class="border border-1 border-gray-800 w-44 sm:w-56 mx-auto">
          @auth('users')
          <a href="{{url('/user/schedule') }}" class="text-sm inline-block py-2 sm:py-3">ログインはこちら</a>
          @else
          <a href="{{  route('user.login') }}" class="text-xs inline-block py-2 sm:py-3">ログインはこちら</a>
          <!-- @if (Route::has('admin.register'))
            <a href="{{ route('admin.register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif -->
          @endauth
          @endif
        </div>
      </div>

      <!-- 管理者ログイン -->
      @if (Route::has('admin.login'))
      <div class="border border-1 border-gray-800 w-56 mx-auto text-gray-900 text-center">
        @auth('admin')
        <a href="{{ url('/admin/schedule') }}" class="text-sm inline-block py-3">管理者はこちら</a>
        @else
        <a href="{{ route('admin.login') }}" class="text-sm inline-block  py-3">管理者はこちら</a>
        <!-- @if (Route::has('admin.register'))
            <a href="{{ route('admin.register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif -->
        @endauth
        @endif
      </div>


    </div>
  </section>

</body>
</html>
