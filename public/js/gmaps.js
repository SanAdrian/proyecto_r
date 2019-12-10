function startMap() {
    mapa = new google.maps.Map(document.getElementById('mapa'), {
        streetViewControl: false,
        mapTypeControl: false,
        center: { lat: -26.177798, lng: -58.179822 },
        zoom: 13
    });
}



/* MI UBICACIÓN */
function markerMyPosition() { //al hacer click en el boton "Mi Ubicación" crea un marcador
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {//Obtiene las coordenadas actuales
            $('#myLat').val(position.coords.latitude);
            $('#myLng').val(position.coords.longitude);
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            if (typeof markerContainer === 'undefined') { /* Crear un marcador con click derecho si no exite alguno */
                myMarkerPosition = new google.maps.Marker({//Crea un marcador con esas coordenadas
                    position: pos,
                    map: mapa,
                    animation: google.maps.Animation.DROP,
                    draggable: true,
                    icon: 'http://localhost:/proyecto_r/public/img/icons/myHome.png'
                });
            };
            mapa.setZoom(17, { animate: true });
            mapa.panTo(pos);

            /* Deshabilitar boton */
            disableBotton('#btnMiUbicacion')

            //Al arrastrar el marcador se cambian las coordenadas
            draggbleMarkerGetPosition(myMarkerPosition, '#myLat', '#myLng', mapa)
            /* Eliminar Marcador */
            deleteMarkerRclick(myMarkerPosition, '#btnMiUbicacion')
        });

    }
};

/** 
* Habilita o Deshabilita los botones y selectores segun el tipo de Usuario 
* @value: valor del select tipo de usuario
*/
function selectTypeUser(value) {
    if (value == 2) {
        $('#btnMiCentro').removeClass('btn-green');
        $('#btnMiCentro').addClass('btn-gray');
        $('#btnMiCentro').prop('disabled', true);
        $('#selectTR').prop('disabled', true)
        marker.setMap(null);
    } else
        if (value == 3) {
            $('#btnMiCentro').removeClass('btn-gray');
            $('#btnMiCentro').addClass('btn-green');
            $('#btnMiCentro').prop('disabled', false);
            $('#selectTR').prop('disabled', false)
        } else
            if (value == 0) {
                $('#btnMiCentro').removeClass('btn-green');
                $('#btnMiCentro').addClass('btn-gray');
                $('#btnMiCentro').prop('disabled', true);
                $('#selectTR').prop('disabled', true)
            }
    console.log('tipo user: ' + value)
}
/* camnia el icono del reciclador */
function changeIconRecycler(value) {
    changeIcon(value, marker, 'recycle')
};

/*CENTRO DE RECICLAJE */
function markerMyCenterPosition() {
    getMyPosition('#myLatCenter', '#myLngCenter', '#btnMiCentro', mapa, 'http://localhost:/proyecto_r/public/img/icons/recycle/black.png')


};
/* NUEVO CONTENEDOR */
function newContainer() {

    disableBotton('#btnCont')

    google.maps.event.addListener(mapa, "rightclick", function (ele) {
        $('#containerLat').val(ele.latLng.lat().toFixed(6));
        $('#containerLng').val(ele.latLng.lng().toFixed(6));
        var pos = ele.latLng;
        if (typeof markerContainer === 'undefined') { /* Crear un marcador con click derecho si no exite alguno */
            markerContainer = new google.maps.Marker({
                position: pos,
                map: mapa,
                animation: google.maps.Animation.DROP,
                draggable: true,
                icon: 'http://localhost:/proyecto_r/public/img/icons/container/black.png'
            });
        };
        mapa.setZoom(17, { animate: true });
        mapa.panTo(pos);

        //Al arrastrar el marcador se cambian las coordenadas
        draggbleMarkerGetPosition(markerContainer, '#containerLat', '#containerLng', mapa)
        /* Eliminar Marcador */
        deleteMarkerRclick(markerContainer, '#btnCont')


/*         var platform = new H.service.Platform({
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
            function(e) { $('#addressCont').val(e);}); */

    });
};

/* function onSuccess(result) {
    var location = result.Response.View[0].Result[0]; */

/* PUNTO DE INICIO */
function startPoint() {

    disableBotton('#btnStart')

    google.maps.event.addListener(mapa, "rightclick", function (ele) {
        $('#startLat').val(ele.latLng.lat().toFixed(6));
        $('#startLng').val(ele.latLng.lng().toFixed(6));
        var pos = ele.latLng;
        if (typeof startMarker === 'undefined') { /* Crear un marcador con click derecho si no exite alguno */
            startMarker = new google.maps.Marker({
                position: pos,
                map: mapa,
                animation: google.maps.Animation.DROP,
                draggable: true,
                icon: 'http://localhost:/proyecto_r/public/img/icons/ruta/start.png'
            });
        };
        mapa.setZoom(17, { animate: true });
        mapa.panTo(pos);

        //Al arrastrar el marcador se cambian las coordenadas
        draggbleMarkerGetPosition(startMarker, '#startLat', '#startLng', mapa)
        /* Eliminar Marcador */
        deleteMarkerRclick(startMarker, '#btnStart')
    });
}


/* PUNTO FINAL */
function endPoint() {

    disableBotton('#btnEnd')

    google.maps.event.addListener(mapa, "rightclick", function (ele) {
        $('#endLat').val(ele.latLng.lat().toFixed(6));
        $('#endLng').val(ele.latLng.lng().toFixed(6));
        var pos = ele.latLng;
        if (typeof endMarker === 'undefined') { /* Crear un marcador con click derecho si no exite alguno */
            endMarker = new google.maps.Marker({
                position: pos,
                map: mapa,
                animation: google.maps.Animation.DROP,
                draggable: true,
                icon: 'http://localhost:/proyecto_r/public/img/icons/ruta/finish.png'
            });
        };
        mapa.setZoom(17, { animate: true });
        mapa.panTo(pos);

        //Al arrastrar el marcador se cambian las coordenadas
        draggbleMarkerGetPosition(endMarker, '#endLat', '#endLng', mapa)
        /* Eliminar Marcador */
        deleteMarkerRclick(endMarker, '#btnEnd')

        var directionsService = new google.maps.DirectionsService;
        var directionsRenderer = new google.maps.DirectionsRenderer({
            draggable: true,
            map: mapa,

        });

        directionsRenderer.addListener('directions_changed', function () {
            computeTotalDistance(directionsRenderer.getDirections());
        });

        var startLat = $('#startLat').val();
        var startLng = $('#startLng').val();
        var endLat = $('#endLat').val();
        var endLng = $('#endLng').val();
        console.log(startLat)
        console.log(startLng)
        console.log(endLat)
        console.log(endLng)
        var start = new google.maps.LatLng(startLat = $('#startLat').val(), startLng = $('#startLng').val());
        var end = new google.maps.LatLng(endLat = $('#endLat').val(), endLng = $('#endLng').val());

        displayRoute(start, end, directionsService, directionsRenderer);
    });
}

function changeIconContainer(value) {
    changeIcon(value, markerContainer, 'container')
}

/** 
* Cambiar Icono segun el tipo de residuo 
* @value: valor del select 
* @marker: objeto de la clase google.maps.Marker 
* @typeIcon: tipo de icon puede ser 'container' o 'recycle'
*/
function changeIcon(value, marker, typeIcon) {
    var iconBase = 'http://localhost:/proyecto_r/public/img/icons/' + typeIcon + '/';
    if (value == 1) {
        marker.setIcon(iconBase + 'paper.png')
    } else
        if (value == 2) {
            marker.setIcon(iconBase + 'plastic.png')
        } else
            if (value == 3) {
                marker.setIcon(iconBase + 'metal.png')
            } else
                if (value == 4) {
                    marker.setIcon(iconBase + 'glass.png')
                } else;
    if (value == 5) {
        marker.setIcon(iconBase + 'white.png')
    }
    console.log(value)
};



/** 
* Deshabilita el boton 
* @idBotton: id del boton para crear marcador 
*/
function disableBotton(idBotton) {
    $(idBotton).prop('disabled', true);
    $(idBotton).removeClass('btn-green');
    $(idBotton).addClass('btn-gray');
};

/** 
* Eliminar Marcador con click derecho 
* @marker: objeto de la clase google.maps.Marker 
* @idbtnMarker: id del boton para crear marcador 
*/
function deleteMarkerRclick(marker, idbtnMarker) {
    google.maps.event.addListener(marker, 'rightclick', function (evt) {
        marker.setMap(null);
        $(idbtnMarker).prop('disabled', false);
        $(idbtnMarker).removeClass('btn-gray');
        $(idbtnMarker).addClass('btn-green');
    });
}

/** 
* Obtiene la posición del marcador despues de ser arrastrado 
* @marker: objeto de la clase google.maps.Marker 
* @idLatInput: id del input que guarda la latitud 
* @idLngInput: id del input que guarda la longitud
* @map: objeto de la clase google.maps.Map donde se muestra el marcador
*/
function draggbleMarkerGetPosition(marker, idLatInput, idLngInput, map) {
    google.maps.event.addListener(marker, 'dragend', function (evt) {
        $(idLatInput).val(evt.latLng.lat().toFixed(6));
        $(idLngInput).val(evt.latLng.lng().toFixed(6));
        map.panTo(evt.latLng);
    });
    marker.setMap(map);
}

/** 
* Crea un Marcador en la posición actual, incorpora delete y draggable 
* @idLatInput: id del input que guarda la latitud 
* @idLngInput: id del input que guarda la longitud
* @marker: objeto de la clase google.maps.Marker
* @idbtnMarker: id del boton para crear marcador 
* @map: objeto de la clase google.maps.Map donde se muestra el marcador
* @iconDefaul: url del icono marcador por defecto
*/
function getMyPosition(idLatInput, idLngInput, idbtnMarker, map, iconDefaul) { //crea un marcador en la unicación actual
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {//Obtiene las coordenadas actuales
            $(idLatInput).val(position.coords.latitude);
            $(idLngInput).val(position.coords.longitude);
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            if (typeof marker === 'undefined') { /* Crear un marcador con click derecho si no exite alguno */
                marker = new google.maps.Marker({//Crea un marcador con esas coordenadas
                    position: pos,
                    map: mapa,
                    animation: google.maps.Animation.DROP,
                    draggable: true,
                    icon: iconDefaul
                });
            };
            map.setZoom(17, { animate: true });
            map.panTo(pos);

            /* Deshabilita el boton para no crear mas de un marcador a la vez */
            disableBotton(idbtnMarker)

            //Al arrastrar el marcador se cambian las coordenadas
            draggbleMarkerGetPosition(marker, idLatInput, idLngInput, map)

            /* Eliminar Marcador */
            deleteMarkerRclick(marker, idbtnMarker)

        });
    }
};


function startMapRuta() {
    mapa = new google.maps.Map(document.getElementById('mapa'), {
        streetViewControl: false,
        mapTypeControl: false,
        center: { lat: -26.177798, lng: -58.179822 },
        zoom: 13
    });

    /* var directionsService = new google.maps.DirectionsService;
    var directionsRenderer = new google.maps.DirectionsRenderer({
        draggable: true,
        map: mapa,
       
    });

    directionsRenderer.addListener('directions_changed', function () {
        computeTotalDistance(directionsRenderer.getDirections());
    });

    var startLat = $('#startLat');
    var startLng = $('#startLng');
    var endLat = $('#endLat');
    var endLng = $('#endLng');

    var start = new google.maps.LatLng(stratLat,startLng);
    var end = new google.maps.LatLng(endLat,endLng);

    displayRoute(start, end, directionsService,directionsRenderer); */
}

/* CREO QUE ES PARA DIBUAR LA RUTA DESPUES TE CUENTO */



function displayRoute(origin, destination, service, display) {
    service.route({
        origin: origin,
        destination: destination,
        travelMode: 'DRIVING',
        avoidTolls: true
    }, function (response, status) {
        if (status === 'OK') {
            display.setDirections(response);
        } else {
            alert('Could not display directions due to: ' + status);
        }
    });
}

