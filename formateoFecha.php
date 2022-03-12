<?php
/*Recibiendo fecha por el metodo GET en formato D-M-Y*/
$dates=$_GET['fecha'];
$ff=formatFechas($dates); /*Con el formato quedaria Y-M-D*/

function formatFechas($dates){

    $fecha = new DateTime($dates);
    return $fecha->format('Y-m-d');;
}
?>