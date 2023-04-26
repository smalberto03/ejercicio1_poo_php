<?php
    require_once('../config/configdb.php');
    require_once('consultas.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Formulario de consultas y actualizacion</title>
    </head>
    <body>
        <h2>Escriba una consulta select o de actualizacion y pulsa sobre su boton correspondiente</h2>
        <form action="index.php" method="POST">
            <input type="text" name="input_consulta" id="consulta"><br><br>
            <input type="submit" name="btn_consulta" value="CONSULTAR"> <input type="submit" name="btn_actualizar" value="ACTUALIZAR">
        </form>


        <?php
            if(isset($_POST['btn_consulta']))
            {
                if(!empty($_POST['input_consulta']))
                {
                    header('Location: select.php?consulta='.$_POST['input_consulta'].'');
                }
                else{
                    echo('Debe rellenar la consulta');
                }

            }

            if(isset($_POST['btn_actualizar']))
            {
                if(!empty($_POST['input_consulta']))
                {
                    header('Location: actualizar.php?update='.$_POST['input_consulta'].'');
                }
                else{
                    echo('Debe rellenar la consulta');
                }

            }

        ?>
    </body>
</html>