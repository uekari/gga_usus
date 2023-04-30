<x-app-layout>
  <div id="map"></div>
  {{-- style --}}
  <style>
  /* スマホ */
  #map {
    height: calc(100vh - 80px - 113px);
    width: 100%;
  }

  /* PC */
  @media (min-width: 1024px) {
    #map {
      height: calc(100vh - 88px);
      width: 100%;
      margin-top: 8px;
    }
  }
  </style>

  {{-- script --}}
  {{-- google API --}}
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyA986Z_pTt3rUAU6K64WGcIyPvAMtzhyeU&language=ja" async defer></script>


  <script>


  // DBから目的地を取得
  let waypointsArray = [];
  @foreach($schedule -> destinations as $destination)
  @if($destination -> address)
  waypointsArray.push({
    location: '{{ $destination->address }}',
  });
  console.log('{{ $destination->address }}');
  @endif
  @endforeach

  // ルート検索の条件
  var routePoint = {
    origin: waypointsArray.shift().location, // 最初の地点を取り出す
    destination: waypointsArray.pop().location, // 最後の地点を取り出す
    waypoints: waypointsArray,
    travelMode: google.maps.DirectionsTravelMode.DRIVING, // 交通手段(WALKING, DRIVINGの場合は車)
  };

  // マップの生成
  var map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(35.681382, 139.766084), // マップの中心
    zoom: 7, // ズームレベル
    disableDefaultUI: true,
    gestureHandling: "greedy",
  });

  const directionObject = new google.maps.DirectionsService(); // ルート検索オブジェクト
  const routeMapObject = new google.maps.DirectionsRenderer({ // ルート描画オブジェクト
    map: map, // 描画先の地図
    // preserveViewport: true, // 描画後に中心点をずらさない
  });
  // ルート検索
  directionObject.route(routePoint, function(result, status) {
    // OKの場合ルート描画
    if (status == google.maps.DirectionsStatus.OK) {
      routeMapObject.setDirections(result);
    }
  });

  // 現在地取得
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      (position) => {
        const pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude,
        };
        var marker = new google.maps.Marker({
          position: pos, //マーカーの位置（必須）
          map: map, //マーカーを表示する地図
          icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 10,
            fillColor: "blue",
            fillOpacity: 1,
            strokeColor: "white",
            strokeWeight: 4,
          },
        });
      },
      (error) => {
        alert('位置情報の取得に対応していません。：' + error.code);
      }
    );
  } else {
    // Browser doesn't support Geolocation
    alert('位置情報の取得に対応していません。：');
  }
  </script>
</x-app-layout>
