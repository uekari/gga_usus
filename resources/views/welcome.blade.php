<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -mx-4 -mb-10 text-center">

        <!-- 管理者ログイン -->
        <div class="sm:w-1/2 mb-10 px-4">
          @if (Route::has('admin.login'))
          <h1 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">管理者用</h1>
          @auth('admin')
          <a href="{{ url('/admin/schedule') }}" class="text-sm text-gray-700 underline">Dashboard</a>
          @else
          <a href="{{ route('admin.login') }}" class="text-sm text-gray-700 underline">管理者</a>
          <!-- @if (Route::has('admin.register'))
        <a href="{{ route('admin.register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif -->
          @endauth
          @endif
        </div>

        <!-- サポーターログイン -->
        <div class="sm:w-1/2 mb-10 px-4">
          @if (Route::has('user.login'))
          <h1 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">サポーター用</h1>
          @auth('users')
          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
          @else
          <a href="{{ route('user.login') }}" class="text-sm text-gray-700 underline">サポーター</a>
          <!-- @if (Route::has('user.register'))
        <a href="{{ route('user.register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif -->
          @endauth
          @endif
        </div>
      </div>
    </div>
  </section>

</body>
</html>
