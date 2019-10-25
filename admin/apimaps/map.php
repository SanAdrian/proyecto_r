<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
        var map;
        var pathCoordinates = Array();
        function initMap() {
                var countryLength
                var mapLayer = document.getElementById("map-layer");
                var centerCoordinates = new google.maps.LatLng(37.6, -95.665);
                var defaultOptions = {
                        center : centerCoordinates,
                        zoom : 4
                }
                map = new google.maps.Map(mapLayer, defaultOptions);
                geocoder = new google.maps.Geocoder();
                <?php
            if (! empty($countryResult)) {
            ?>
                countryLength = <?php echo count($countryResult); ?>
                <?php
                foreach ($countryResult as $k => $v) 
                {
            ?>
                geocoder.geocode({
                        'address' : '<?php echo $countryResult[$k]["country"]; ?>'
                }, function(LocationResult, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                                var latitude = LocationResult[0].geometry.location.lat();
                                var longitude = LocationResult[0].geometry.location.lng();
                                pathCoordinates.push({
                                        lat : latitude,
                                        lng : longitude
                                });

                                new google.maps.Marker({
                                        position : new google.maps.LatLng(latitude, longitude),
                                        map : map,
                                        title : '<?php echo $countryResult[$k]["country"]; ?>'
                                });

                                if (countryLength == pathCoordinates.length) {
                                        drawPath();
                                }

                        }
                });
                <?php
                }
            }
            ?>
        }
        function drawPath() {
                new google.maps.Polyline({
                        path : pathCoordinates,
                        geodesic : true,
                        strokeColor : '#FF0000',
                        strokeOpacity : 1,
                        strokeWeight : 4,
                        map : map
                });
        }
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0&callback=initMap"
    async defer></script>
  </body>
</html>