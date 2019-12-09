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
                icon: 'http://localhost:/proyecto_r/public/img/icons/myHome.png'
            });
            mapa.setZoom(18);
            mapa.panTo(pos);

            disableBotton('#btnMiUbicacion')

            //Al arrastrar el marcador se cambian las coordenadas
            draggbleMarkerGetPosition(myMarkerPosition, '#myLat', '#myLng', mapa)
            /* Eliminar Marcador */
            deleteMarkerRclick(myMarkerPosition, '#btnMiUbicacion')
        });

    }
};

function selectTypeUser(value) {
    if (value == 2) {
        $('#btnMiCentro').removeClass('btn-green');
        $('#btnMiCentro').addClass('btn-gray');
        $('#btnMiCentro').prop('disabled', true);
        $('#selectTR').prop('disabled', true)
        myMarkerCenterPosition.setMap(null);
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
    console.log(value)
}

function changeIconRecycler(value) {
    var iconBase = 'http://localhost:/proyecto_r/public/img/icons/recycle/';
    if (value == 1) {
        myMarkerCenterPosition.setIcon(iconBase + 'paper.png')
    } else
        if (value == 2) {
            myMarkerCenterPosition.setIcon(iconBase + 'plastic.png')
        } else
            if (value == 3) {
                myMarkerCenterPosition.setIcon(iconBase + 'metal.png')
            } else
                if (value == 4) {
                    myMarkerCenterPosition.setIcon(iconBase + 'glass.png')
                } else;
    console.log(value)
};

/* CREAR CENTRO DE RECICLAJE */
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
                icon: 'http://localhost:/proyecto_r/public/img/icons/recycle/white.png'
            });
            mapa.setZoom(18);
            mapa.panTo(pos);

            //Al arrastrar el marcador se cambian las coordenadas
            draggbleMarkerGetPosition(myMarkerCenterPosition, '#myLatCenter', '#myLngCenter', mapa)

            /* Eliminar Marcador */
            deleteMarkerRclick(myMarkerCenterPosition, '#btnMiCentro')

        });
    }

};
/* NUEVO CONTENEDOR */
function newContainer() {
    
    disableBotton('#btnCont')
    google.maps.event.addListener(mapa, "rightclick", function (ele) {
        markerContainer = new google.maps.Marker({
            position: ele.latLng,
            map: mapa,
            animation: google.maps.Animation.DROP,
            draggable: true,
            icon: 'http://localhost:/proyecto_r/public/img/icons/container/white.png'
        });
        deleteMarkerRclick(markerContainer, '#btnCont')
    });
}

/** 
* Cambiar Icono segun el tipo de residuo 
* @ivalue: valor del select 
* @marker: objeto de la clase google.maps.Marker 
* @typeIcon: tipo de icon puede ser 'container' o 'recycle'
*/
function changeIconRecycler(value, marker, typeIcon) {
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

