<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="font-sans antialiased">
  <div class="min-h-screen bg-color">

    @if(auth('admin')->user())
    @include('layouts.admin-navigation')
    @elseif(auth('users')->user())
    @include('layouts.user-navigation')
    @endif

    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>
    @endif

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>

  <script type="text/javascript">
  window.initMap = () => {

    let map;

    const area = document.getElementById("map"); // マップを表示させるHTMLの箱
    // マップの中心位置
    const center = {
      lat: 35.667379,
      lng: 139.7054965
    };

    //マップ作成
    map = new google.maps.Map(area, {
      center,
      zoom: 17,
    });
  }
  </script>
  <!-- 作成したAPIキーを貼り付ける -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX0xI6EtxVVp3U4bJ5-O8tm8KiTGVO0PM&callback=initMap" async defer></script>


</body>
</html>
