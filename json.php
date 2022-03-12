<?php
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];

$datosAlmacenados=['nombre'=>$nombre, 'apellido'=>$apellido];
 echo json_encode($datosAlmacenados);

///////////////////////JSON_ENCODE//////////////////////////////////////////////
/*$inf=['nombre'=>'roque','apellido'=>'potenza'];

$json=json_encode($inf);// se convierte en un objeto json

print_r($json); // Imprimimos la variable $json*/

//////////////////////////JSON_DECODE///////////////////////////////////////////
/*$datos='{"nombre":"maria","apellido":"sanchez"}';

echo '<br/>';
//array asociativo
$jsonArray=json_decode($datos,true); 
print_r($jsonArray["nombre"]);
echo '<br>';
//objeto en php
$jsonObjeto=json_decode($datos); 
print_r($jsonObjeto->apellido);*/
?>
