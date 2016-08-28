<?php 
class Conexion
{

private $host="localhost";
private $usuario="usuario";
private $clave="clave";
private $bd="practica";
protected $conexion;


			/*public function conexion()
			{

						$conexion= new mysqli($this->host,$this->usuario,$this->clave,$this->bd);

						if($conexion->connect_errno)
						{

								echo "Ocurrio un errror de conexion".$conexion->connect_error;

						}
						return $conexion;
			}*/

			public function __construct(){

						$this->conexion= new mysqli($this->host,$this->usuario,$this->clave,$this->bd);

						if($this->conexion->connect_errno)
						{

								die("Ocurrio un errror de conexion".$conexion->connect_error);

						}
						return $this->conexion;

			}

}

Class Sentencias extends Conexion
{


			public function Select()
			{
            
		            /*$con=parent::conexion();*/
		            $sentencia="select * from alumno";
		            /*$procesos=$con->query($sentencia);*/
		            $procesos=$this->conexion->query($sentencia);

            		while($row=$procesos->fetch_array(MYSQL_ASSOC))
            		{

                    $datos[]=$row;

           			}
           			return $datos;

			}



}

$conexion= new Sentencias();
$conex=$conexion->Select();
foreach($conex as $inf){

	echo "Nombre: ".$inf['nombre']."<br/>";

}
$a = json_encode( array('a'=>1, 'b'=>2, 'c'=>'I <3 JSON') );
// Outputs: {"a":1,"b":2,"c":"I <3 JSON"}
$b = json_decode( $a );
echo "$b->a, $b->b, $b->c";
// Outputs: 1, 2, I <3 JSON

?>
