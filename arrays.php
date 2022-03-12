<?php

$datos=[['img-thumbnail'=>'roque','apellido'=>'potenza','pais'=>'venezuela'],
        ['img-thumbnail'=>'jose','apellido'=>'lugo','pais'=>'chile'],
        ['img-thumbnail'=>'maria','apellido'=>'sanchez','pais'=>'peru'],
        ['img-thumbnail'=>'pedro','apellido'=>'zerpa','pais'=>'bolivia'],
        ['img-thumbnail'=>'manuel','apellido'=>'suarez','pais'=>'china'],
        ['img-thumbnail'=>'isabel','apellido'=>'castillo','pais'=>'rusia'],
        ['img-thumbnail'=>'antonio','apellido'=>'perez','pais'=>'egipto'],
        ['img-thumbnail'=>'jeison','apellido'=>'torres','pais'=>'israel']
       ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .contenedor{
        border:1px solid;
        border-radius:5px;
    }
    table{
        width:100%; 
        text-align:center;
    }
</style>
</head>
<body>
    <table>
    
        <?php
        for ($i=0;$i<count($datos);$i++) { 
           if($i%4==0){
                echo "<tr>";
           }
            echo "<td> 
            <div class='contenedor'>
            <div class='header'>
            ".$datos[$i]['img-thumbnail']."
            </div>
            <div class='body'> ".$datos[$i]['apellido']."</div>
            <div class='footer'> ".$datos[$i]['pais']."</div>
            </div>
            </td>";
        }
        ?>
        </tr>
    </table>
</body>
</html>