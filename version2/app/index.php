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
        <input type="submit" name="btn_consultar" value="CONSULTAR"> <input type="submit" name="btn_actualizar" value="ACTUALIZAR">
    </form>

    <?php

        if(isset($_POST['btn_consultar'])) //Si existe el boton consultar (si se ha pulsado). 
        {

            if(!empty($_POST['input_consulta'])) //Preguntamo si esta vacion por si el usuario no ha rellenaod el input dle formulario 
            {
                $objeto_consulta = new Consultas(); //Instaciamo siun objeto de la clase Consultas

                $consulta = $_POST['input_consulta']; //Guardamis la cinsulta que el usuario untroduce por teclado en una variable 

                $filas = $objeto_consulta->realizar_consulta_select($consulta); //Con el objeto llamamos a un metodo de la clase y le pasamos la consulta 

                echo('Las filas que ha devuelto esta consulta son: <b>'.$objeto_consulta->numfilas.'</b>.<br>'); //Escribimos un atributo de la clase mediante el objeto (Es propiedad del objeto) 


                foreach($filas as $valores)
                {
                    foreach($valores as $valor)
                    {
                        echo('<p>'.$valor.'</p>');
                    }
                }
                
            }
            else
            {
                echo('Debe rellenar la consulta');
            }

        }

        if(isset($_POST['btn_actualizar']))
        {
            if(!empty($_POST['input_consulta']))
            {
                $objeto_update = new Consultas();

                $update = $_POST['input_consulta'];

                $rows = $objeto_update->modificacion($update);

                echo('<h2>Las filas afectadas por la consulta de modificacion son: <b>'.$objeto_update->filasafectadas.'</b></h2>');

            }
            else{
                echo('Debe rellenar la consulta');
            }

        }
       

    ?>
</body>
</html>