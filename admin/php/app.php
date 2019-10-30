<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($con, "SELECT * FROM marcadores");

  // Creamos una tabla para listar los datos 
  echo "<div class='bsc-tbl'>";

  echo "<table class='table table-sc-ex'>
          <thead class='thead-dark'>
            <tr>
              <th scope='col'>Barrio</th>
              <th scope='col'>Dirección</th>
              <th scope='col'>Latitud</th>
              <th scope='col'>Longitud</th>
              <th scope='col'>Tipo</th>
            </tr>
            </thead>
            <tbody>";

  while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td scope='col'>" . $row['barrio_marker'] . "</td>";
      echo "<td scope='col'>" . $row['direccion_marker'] . "</td>";
      echo "<td scope='col'>" . $row['lat_marker'] . "</td>";
      echo "<td scope='col'>" . $row['lon_marker'] . "</td>";
      echo "<td scope='col'>" . $row['tipo'] . "</td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
  echo "</div>";

  mysqli_close($con);

?> 