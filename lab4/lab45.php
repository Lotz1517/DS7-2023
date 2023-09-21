<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laboratorio 4.5</title>
</head>

<body>
  <form action="lab45.php" method="post">
    <center>
    </br>
    <h1>Matriz Identidad</h1>
    <p>Solo se permiten números Pares</p>
    <input type="number" name="num" id="" size="15" style="width:50px">
    <button type="submit" name="send">Enviar</button>
    </br></br>
    <h2>Resultado</h2>
  </form>
  <?php
  if (array_key_exists("send", $_POST)) {
    if (intval($_POST["num"]) % 2 == 0) {
      $tam = intval($_POST['num']);
      for ($i = 0; $i < $tam; $i++) {
        for ($j = 0; $j < $tam; $j++) {
          if ($i == $j) {
            echo 1;
          } else {
            echo 0;
          }
        }
        echo "</br>";
      }
    } else {
      header('location: lab45.php');
    }
  }
  ?>
  </center>
</body>

</html>