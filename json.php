<?php
$inf=['nombre'=>'roque','apellido'=>'potenza'];

$json=json_encode($inf);
print_r($json);
echo '<br/>';
$jsond=json_decode($json);

print_r($jsond->{'nombre'});
?>
