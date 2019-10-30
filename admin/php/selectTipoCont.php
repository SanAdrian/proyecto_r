<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos los barrios con todos sus datos (id_barrio, nombre_barrio)
  $result = mysqli_query($con, "SELECT * FROM tiporesiduos");

  // Creamos el select para listar los datos 
  echo "<label class='ts-label' for='barrio'>Tipo Contenedor</label>
        <select tabindex='-98' id='selectBarrio'class='btn-group bootstrap-select' data-live-search='true'>";

  while ($row = mysqli_fetch_array($result)) {
      echo "<option  class='input-large span10' value=".$row['id_tipoR'].">".$row['nombre_tipoR']."</option>";
  }
  echo "</select>";
  mysqli_close($con);

?> 