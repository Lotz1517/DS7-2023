<html>
    <head>
    <title>laboratorio 4.1</title>
    </head>
    <body>
        <?php
     if (array_key_exists('volver', $_POST)){
   
     }
        if (array_key_exists('enviar', $_POST)){
            echo "<center>";
            echo "<br/>";
            echo "<h1>Indicador de Desempeño en las Ventas</h1>";
            if ($_REQUEST['puntaje'] >= 8) {
                echo "<img src='\lab4\Imagenes\Lab41 - a.png'>";
            } elseif ($_REQUEST['puntaje'] < 8 && $_REQUEST['puntaje'] > 3) {
                echo "<img src='\lab4\Imagenes\Lab41 - b.png'>";
            } else {
                echo "<img src='\lab4\Imagenes\Lab41 - c.png'>";
            }
            echo "<br>";            
            echo "¡Gracias por responder que tenga un Buen Día!";
            echo "<br>";   
        ?>
            <br><a href="lab41.php"> Volver a Calificar </a>
        <?php
            echo "</center>";             
        }
        else{
            echo "<center>";
            ?>
            <form action="lab41.php" method="POST">
            <h1>Indicador de Desempeño en las Ventas</h1>
            <br/>
            Del 1 al 10 coloque que tan satisfecho está con las ventas realizadas: 
            <br/><br/>
            <input type="number" name="puntaje" min="1" max="10" size="10"><br>
            <br/>
                <input type="submit" name="enviar" value="Enviar Calificación">
            </form>
            <?php
            echo "</center>";
        }
        ?>
    </body>
</html>