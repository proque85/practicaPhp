<?php
class Conexion{

		public function conexion()
		{
				$conexion = pg_connect("host=localhost port=5432 user=user password=clave dbname=practica");
				if(!$conexion)
				{
					die("Error en la Conexion");
				}
				return $conexion;
		}
}



class Procesos extends Conexion{

		public function consulta()
		{
							$consulta="select * from alumno";
                                                        $conex=parent::conexion();
							$procesos=pg_query($conex,$consulta);
							while($row=pg_fetch_array($procesos, NULL, PGSQL_ASSOC)){
							$datos[]=$row;
							}
							return $datos;
		}
}

$inf= new Procesos();
$datos=$inf->consulta();
//print_r($datos);
foreach ($datos as $valor){
echo "<br/>";
echo $valor['Nombre'];

}


?>
