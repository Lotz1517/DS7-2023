<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Laboratorio 4.3</title>
</head>

<body>
<center>
  <?php
  $element = array();

  echo '<h1>Arreglo unidimencional de 20 Elementos</h1>';
  echo '</br>';

  while (sizeof($element) != 20) {
    array_push($element, random_int(1, 99));
    array_unique($element, SORT_NATURAL);
  }
  ?>
  <table border="1">
    <tr>       
      <?php
      foreach ($element as $e) {
        echo '<td>' . $e . '</td>';
      }
      ?>
    </tr>
  </table>
  <?php
  for ($i = 0; $i < sizeof($element); $i++) {
    if ($element[$i] == max($element)) {
      print '</br>';
      echo '<h2>El valor mas alto del arreglo es ' . max($element) . ' y esta en la posicion ' . $i . '</h2>';
    }
  }
  ?>
</center>  
</body>

</html>