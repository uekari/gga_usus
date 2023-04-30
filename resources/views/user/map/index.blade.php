<x-app-layout>
  <div id="map"></div>

  <!-- Google Maps JavaScript APIの読み込み -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA986Z_pTt3rUAU6K64WGcIyPvAMtzhyeU"></script>
<!-- 地図を表示する要素 -->
<div id="map" style="height: 500px;"></div>

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

<script>
  let waypoints = [];
  @foreach($schedule -> destinations as $destination)
  @if($destination -> address)
  waypoints.push({
    location: '{{$destination -> address}}',
  });
  console.log('{{$destination -> address}}');
  @endif;
  @endforeach;


    // ランダムな2点を設定
    var origin = waypoints.shift().location;
    var destination = waypoints.pop().location;
// Google Maps Geocoding APIを使用して、住所から緯度経度を取得
var geocoder = new google.maps.Geocoder();
geocoder.geocode({ 'address': origin }, function (results, status) {
    if (status == 'OK') {
        var origin_lat = results[0].geometry.location.lat();
        var origin_lng = results[0].geometry.location.lng();
        geocoder.geocode({ 'address': destination }, function (results, status) {
            if (status == 'OK') {
                var destination_lat = results[0].geometry.location.lat();
                var destination_lng = results[0].geometry.location.lng();
                // Google Maps Directions APIを使用して、2点間のルートを取得
                var directionsService = new google.maps.DirectionsService();
                var request = {
                    origin: { lat: origin_lat, lng: origin_lng },
                    destination: { lat: destination_lat, lng: destination_lng },
                    waypoints: waypoints,
                    optimizeWaypoints: true,
                    travelMode: 'DRIVING'
                };
                directionsService.route(request, function (result, status) {
                    if (status == 'OK') {
                        var route = result.routes[0];
                        // 地図の中心を決定するために、経路上の座標を取得
                        var bounds = new google.maps.LatLngBounds();
                        route.legs.forEach(function (leg) {
                            leg.steps.forEach(function (step) {
                                step.path.forEach(function (path) {
                                    bounds.extend(path);
                                });
                            });
                        });
                        var center = bounds.getCenter();
                        // Google Maps JavaScript APIを使用して、地図上にルートを表示
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: center,
                            zoom: 14
                        });
                        map.fitBounds(bounds);
                        var routeOptions = {
                            path: [],
                            geodesic: true,
                            strokeColor: "#FF0000",
                            strokeOpacity: 1.0,
                            strokeWeight: 2
                        };
                        // ルートの座標を取得して、表示オプションに追加
                        for (var i = 0; i < route.legs.length; i++) {
                            var leg = route.legs[i];
                            for (var j = 0; j < leg.steps.length; j++) {
                                var step = leg.steps[j];
                                for (var k = 0; k < step.path.length; k++) {
                                var point = step.path[k];
                                routeOptions.path.push(point);
                                }
                              }
                            }
                        var routePath = new google.maps.Polyline(routeOptions);
                          routePath.setMap(map);
                        } else {
                          console.error("Directions request failed due to " + status);
                        }
                      });
                        } else {
                          console.error("Geocode was not successful for the following reason: " + status);
                        }
                      });
                        } else {
                          console.error("Geocode was not successful for the following reason: " + status);
                        }
                      });
</script>

</x-app-layout>
