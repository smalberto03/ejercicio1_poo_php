<?php
    require_once('../config/configdb.php');
    require_once('consultas.php');
    require_once('index.php');

    if(isset($_GET['update']))
    {
        $objeto_update = new Consultas();

        $update = $_GET['update'];

        $rows = $objeto_update->modificacion($update);

        $rows = $objeto_update->modificacion($update);

        echo('<h2>Las filas afectadas por la consulta de modificacion son: <b>'.$objeto_update->filasafectadas.'</b></h2>');

    }

    
?>