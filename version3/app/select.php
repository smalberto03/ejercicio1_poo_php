<?php
    require_once('../config/configdb.php');
    require_once('consultas.php');
    require_once('index.php');


    if(isset($_GET['consulta']))
    {
        

        $objeto_consulta = new Consultas();

        $consulta = $_GET['consulta'];  
        //$consulta = $_POST['input_consulta']; //Guardamis la cinsulta que el usuario untroduce por teclado en una variable 

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
    
?>