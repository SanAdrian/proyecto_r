<?php

class ruta
{

    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function getBarrios()
    {
        $this->db->query('SELECT * FROM barrios');
        return $this->db->registers();
    }
    
    public function getDias()
    {
        $this->db->query('SELECT * FROM dias');
        return $this->db->registers();
    }

    public function getHorarios()
    {
        $this->db->query('SELECT * FROM horarios');
        return $this->db->registers();
    }

}
?>

<script>
    function drawRuta(value){
        $.ajax({
            type: 'POST',
            url: 'llllll',/* donde se procesan los datos */
            data: 'datos:'+value,/* Datos que se envian */
            dataType: 'JSON', /* tipo de dato respuesta */
            success: function(response){
                drawRutaMap(response.lat,response.lng);
            }
        })
    }
/* Dice que es para dibujar una ruta entre dos puntos */
function drawRutaMap(){
    var startLat = $('#startLat');
    var startLng = $('#startLng');
    var endLat = $('#endLat');
    var endLng = $('#endLng');

    var start = new google.maps.LatLng(stratLat,startLng);
    var end = new google.maps.LatLng(endLat,endLng);
    
    var request = {
        origin: start,
        destination: end,
        traveMode: google.maps.TarvelMode.DRIVING
    };
    directionService.route(request,function(response, status){
        if(status == google.maps.DirectionsStatus.OK){
            directionsDisplay.setDirections(response);
            directionsDisplay.setMap(mapRuta);
            directionsDisplay.setOptions({supperssMarkers: false});
        }
    })

    
}

</script>