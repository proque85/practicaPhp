<?php
//Generamos una interfaz con la palabra interface

interface Computadora{
    public function procesador();
}
// Para incluir una interface en una clase se debe de usar la palabra clave implements
class Intel implements Computadora{

public $cpuAmd;
public $cpuIntel;

public function procesador(){

  return  $this->cpuIntel=[['Nombre'=>'Intel core','Familia'=>'i9','Skun'=>'11900','Linea'=>'K'],
                           ['Nombre'=>'Intel core','Familia'=>'i5','Skun'=>'11600','Linea'=>'K']];
}

}

class Amd implements Computadora{

    public function procesador(){

      return  $this->cpuAmd=[['Nombre'=>'AMD Ryzen','Familia'=>'7','Skun'=>'5700','Linea'=>'G'],
                             ['Nombre'=>'AMD Ryzen','Familia'=>'5','Skun'=>'5600','Linea'=>'G']];
    
    }


}


$Amd= New Amd();
$Intel= New Intel();
$procesadoresAmd=$Amd->procesador();
$procesadoresIntel=$Intel->procesador();
$procesadores=array_merge($procesadoresAmd,$procesadoresIntel); //Utilizamos array_merge para concatenar arrays

echo "Procesadores: <br>";
foreach($procesadores as $informacion)
 	{
 	
 	foreach($informacion as $datos => $value)
 		{
 		echo $datos." ".$value."<br>";
 		}
 	echo "<br>";
 	}
//var_dump($procesadores);
?>