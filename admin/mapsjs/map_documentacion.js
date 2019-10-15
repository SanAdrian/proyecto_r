/* getVurrenPosition: obtiene las cordenadas actual*/

navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);
function fn_mal(){};
function fn_ok(respuesta){
    var lat = respuesta.coords.latitude;
    var lon = respuesta.coords.longitude;
}