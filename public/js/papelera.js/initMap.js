function initMap() {
        

    marker = new google.maps.Marker({
            position: { lat: -26.177798, lng: -58.179822 },
            map: mapa,
            animation: google.maps.Animation.DROP,
            /* animation: google.maps.animation.DROP, */
            draggable: true,
        });
        marker.addListener('click', toggleBounce);
}
function toggleBounce() {
if (marker.getAnimation() !== null) {
marker.setAnimation(null);
} else {
marker.setAnimation(google.maps.Animation.BOUNCE);
}
}
// Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
google.maps.event.addDomListener(window, 'load', initMap);



myMarkerPosition.addListener('dblclick', toggleBounce);
function toggleBounce() {
    if (myMarkerPosition.getAnimation() !== null) {
        myMarkerPosition.setAnimation(null);
    } else {
        myMarkerPosition.setAnimation(google.maps.Animation.BOUNCE);
    }
}

var platform = new H.service.Platform({
    'apikey': 'jLvVr3awcZ7YiX7TMLwxrlMLH8lRNpd6zuz-N8PB0aM'
  });
var lat = $('#containerLat').val();
var lng = $('#containerLng').val();
  var reverseGeocodingParameters = {
    prox: 'lat,lng,50',
    mode: 'retrieveAddresses',
    maxresults: 1
  };

  var geocoder = platform.getGeocodingService();
  geocoder.reverseGeocode(
    reverseGeocodingParameters,
    onSuccess,
    function(e) { $('#addressCont').val(e);});

    <meta name="viewport" content="initial-scale=1.0,
        width=device-width" />
      <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
        type="text/javascript" charset="utf-8"></script>
      <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
        type="text/javascript" charset="utf-8"></script>