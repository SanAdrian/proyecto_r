function startMap() {
    mapa = new google.maps.Map(document.getElementById('mapa'), {
        streetViewControl: false,
        mapTypeControl: false,
        center: { lat: -26.177798, lng: -58.179822 },
        zoom: 13
    });

}

function getMyPosition() { //al hacer click en "Mi Ubicación"
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {//Obtiene las coordenadas actuales
            $('#myLat').val(position.coords.latitude);
            $('#myLng').val(position.coords.longitude);
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            myMarkerPosition = new google.maps.Marker({//Crea un marcador con esas coordenadas
                position: pos,
                map: mapa,
                animation: google.maps.Animation.DROP,
                draggable: true,
            });
            mapa.setZoom(18);
            mapa.panTo(pos);
            myMarkerPosition.addListener('dblclick', toggleBounce);
            function toggleBounce() {
                if (myMarkerPosition.getAnimation() !== null) {
                    myMarkerPosition.setAnimation(null);
                } else {
                    myMarkerPosition.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            //Al arrastrar el marcador se cambian las coordenadas
            google.maps.event.addListener(myMarkerPosition, 'dragend', function (evt) {
                $("#myLat").val(evt.latLng.lat().toFixed(6));
                $("#myLng").val(evt.latLng.lng().toFixed(6));
                mapa.panTo(evt.latLng);
            });
            myMarkerPosition.setMap(mapa);

        });

    }
};

function getMyCenterPosition() { //al hacer click en "Mi Ubicación"
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {//Obtiene las coordenadas actuales
            $('#myLatCenter').val(position.coords.latitude);
            $('#myLngCenter').val(position.coords.longitude);
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            myMarkerCenterPosition = new google.maps.Marker({//Crea un marcador con esas coordenadas
                position: pos,
                map: mapa,
                animation: google.maps.Animation.DROP,
                draggable: true,
                icon: {url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"}
            });
            mapa.setZoom(18);
            mapa.panTo(pos);
            myMarkerCenterPosition.addListener('dblclick', toggleBounce);
            function toggleBounce() {
                if (myMarkerCenterPosition.getAnimation() !== null) {
                    myMarkerCenterPosition.setAnimation(null);
                } else {
                    myMarkerCenterPosition.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            //Al arrastrar el marcador se cambian las coordenadas
            google.maps.event.addListener(myMarkerCenterPosition, 'dragend', function (evt) {
                $("#myLatCenter").val(evt.latLng.lat().toFixed(6));
                $("#myLngCenter").val(evt.latLng.lng().toFixed(6));
                mapa.panTo(evt.latLng);
            });
            myMarkerCenterPosition.setMap(mapa);

        });
    }}

