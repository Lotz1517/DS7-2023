<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Parcial#1 - Juan Lozano</title>
</head>

<body>
  <form action="parcial1.php" method="post">
    <center>
    </br>

    <h1>Matriz Sub-Diagonal</h1>
    <p>Solo se permiten números Pares</p>
    <input type="number" name="num" id="" size="15" style="width:50px">
    <button type="submit" name="send">Enviar</button>
    </br></br>
    <h2>Resultado</h2>
  </form>
  <table>
  <?php
  $element = array();
  if (array_key_exists("send", $_POST)) {
    if (intval($_POST["num"]) % 2 == 0) {
      $tam = intval($_POST['num']);
      for ($i = 0; $i < $tam; $i++) {
        for ($j = 0; $j < $tam; $j++) {
          if ($j==0 or $i==$tam-1) {
            echo 0;            
          } elseif ($i==$j) {
            $val=random_int(101, 200);
            array_push($element, $val);
            echo $val;
          } else {
            echo 0;            
          }
        }
        echo "</br>";
      }
      $sum = 0;
      for ($i = 0; $i < sizeof($element); $i++) {
        $sum = $element[$i] + $sum;
      }
      print '</br>';
      echo '<h2>La suma de esta matriz es: ' . $sum . '</h2>';
    } else {
      header('location: parcial1.php');
    }
  }
  ?>
  </table>
  </center>
</body>
</html>