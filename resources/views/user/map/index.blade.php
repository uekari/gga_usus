<x-app-layout>
  <!-- Google Maps JavaScript APIの読み込み -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA986Z_pTt3rUAU6K64WGcIyPvAMtzhyeU"></script>
  <!-- 地図を表示する要素 -->

  <div class="sm:mt-12 pb-20 pt-24">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
       <div class="py-6 px-10 bg-round">
         <section class="text-gray-900 body-font">
            <p class="pt-8 pb-6 text-2xl text-center font-bold"> {{ __('地図 ') }}</p>
              <div id="map" class="rounded"></div>
          </section>
        </div>
      </div>
    </div>
  </div>


  {{-- style --}}
  <style>
    /* スマホ */
    #map {
      height: calc(93vh - 80px - 80px - 75px);
      /* height: 100vh; */
      width: 100%;
    }

    /* PC */
    @media (min-width: 1024px) {
      #map {
        height: calc(100vh - 88px - 90px);
        width: 100%;
      }
    }
  </style>

  <script>
    // DBから目的地を取得
    let waypointsArray = [];
    @foreach ($schedule->destinations as $destination)
      @if ($destination->address)
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
      zoom: 15, // ズームレベル
      disableDefaultUI: true,
      gestureHandling: "greedy",
    });

    const directionObject = new google.maps.DirectionsService(); // ルート検索オブジェクト
    const routeMapObject = new google.maps.DirectionsRenderer({ // ルート描画オブジェクト
      map: map, // 描画先の地図
      polylineOptions: {
        strokeColor: '#FF0000',
        strokeWeight: 2,
      }
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
    // if (navigator.geolocation) {
    //   navigator.geolocation.getCurrentPosition(
    //     (position) => {
    //       const pos = {
    //         lat: position.coords.latitude,
    //         lng: position.coords.longitude,
    //       };
    //       var marker = new google.maps.Marker({
    //         position: pos, //マーカーの位置（必須）
    //         map: map, //マーカーを表示する地図
    //         icon: {
    //           path: google.maps.SymbolPath.CIRCLE,
    //           scale: 10,
    //           fillColor: "blue",
    //           fillOpacity: 1,
    //           strokeColor: "white",
    //           strokeWeight: 1,
    //         },
    //       });
    //     },
    //     (error) => {
    //       alert('位置情報の取得に対応していません。：' + error.code);
    //     }
    //   );
    // } else {
    //   // Browser doesn't support Geolocation
    //   alert('位置情報の取得に対応していません。：');
    // }
  </script>

</x-app-layout>
