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
    <title>Document</title>
</head>
<body>
    <h1>Filas devueltas de una consulta select con POO</h1>

    <?php
        //$objeto_consulta =  new Consultas();
        $objeto_update = new Consultas();

        //$consulta = 'SELECT distinct idJesuita FROM  visita'; // where idJesuita= 16'; //CON ESTAS CONSULTAS SE REALIZAN LOS SELECTS 
        $update = 'UPDATE lugar set lugar = "Londres" where ip = "10.3.43.70"'; //Con ewsta consulta realizamos las modificaciones 
        $update = 'INSERT INTO prueba2daw VALUES("192-168-23-03", "Benito"), ("192-168-23-04", "Caceres")';

        //$filas = $objeto_consulta->realizar_consulta_select($consulta); 
        $rows = $objeto_update->modificacion($update);

        //echo('Las filas que ha devuelto esta consulta son: <b>'.$objeto_consulta->numfilas.'</b>.<br>');
        echo('<h2>Las filas afectadas por la consulta de modificacion son: <b>'.$objeto_update->filasafectadas.'</b></h2>');//.$objeto_update->filasafectadas.'</b>');

        //if(!empty($resultado)) //Es una tonetira prgintyar por enpty en un dato de tipo boolean
        //{
            //foreach($filas as $valores)
            //{
               
                
                
                //echo('<p>'.$valores.'</p>');

                //var_dump($valores);
                //var_dump($indice);

                //print_r($valores);

                /* CAMBIARB EL NOMBRE A ESTAS VARIABLES PARA EVITAR ERRORES TYA QUE SON NOMBRES MUY PARECIDOS */

                
                /*foreach($valores as $valor)
                {
                    echo('<p>'.$valor.'</p>');
                }*/


                /*foreach($valores as $valor)
                {
                    echo('<p>'.$valores.'</p>');
                }*/

                //echo($valores['idJesuita'].' ');
               // echo('<p>'.$valores['idJesuita'].'. '.$valores['nombre'].'.</p>');

                //echo($valores['lugar']);
                //print_r($resultado);
                //echo('<br>');
                // print_r($valores);

                //Llamar al atributo num_filas
            //}

            
            //echo($objeto_consulta->numfilas);

            /*
            print_r($resultado);
                echo('<br>');
                print_r($valores);
                echo('<br>'); 
                echo('<br>');

           */
        //}
        //else{
            //echo('No hay filas afectadas');
        //}
         
    ?>
</body>
</html>