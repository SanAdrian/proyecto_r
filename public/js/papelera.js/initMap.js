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