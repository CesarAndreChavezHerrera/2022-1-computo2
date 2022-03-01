<?php
    //Comentario de una línea
    
    /*
    comentarios
    */
    
    /*
    $numero=10;
    echo "<h1>Programacion Computacional IV</h1>" . $numero;
    */

    //evaluar si se está enviando el boton
    if(isset($_POST['seleccion'])){
        echo "Click abre el boton";
        $idioma = $_POST['idioma'];
        echo "<br/>".$idioma;
        INCLUDE $idioma. ".php";
    }
    else{
        echo"No se ha enviado el click";
        INCLUDE "es.php";
    }
?>
<html>
    <head>
        <title>Cambio Idioma</title>
    </head>
    <body>

        <form method="POST">
            <select name="idioma">
                <option value="es">Spanish</option>
                <option value="en">English</option>
            </select>    
            <input type="submit" name="seleccion" value="Cambiar" />
        </form>
        <h1><?php echo TITLE; ?></h1>
        <h1><?php echo HEADING_TITLE; ?></h1>
        <h1><?php echo OVERVIEW_TITLE; ?></h1>
    </body>
</html>