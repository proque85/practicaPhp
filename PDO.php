<?php
	//claudio@comunidaddephp.org
	//www.comunidaddephp.org
			
	
	try
		{
$conn = new PDO('pgsql:host=localhost; dbname=practica','usuario','clave');
print_r($conn);
			//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			/*
			$nombre = "Claudio php3";
			$edad = 21;
			$descripcion = "instructor 3";
			
			$sql = $conn->prepare('insert into personas (nombre, edad, descripcion) values (?,?,?)');
			$sql->bindParam(1,$nombre,PDO::PARAM_STR, 250);
			$sql->bindParam(2,$edad,PDO::PARAM_INT);
			$sql->bindParam(3,$descripcion,PDO::PARAM_STR, 250);
			$sql->execute();
			
			
			$sql = $conn->prepare('insert into personas (nombre, edad, descripcion) values (:nombresql, :edadsql, :descsql)');
			$sql->bindParam(':nombresql',$nombre,PDO::PARAM_STR, 250);
			$sql->bindParam(':edadsql',$edad,PDO::PARAM_INT);
			$sql->bindParam(':descsql',$descripcion,PDO::PARAM_STR, 250);
			$sql->execute();
			
			*/
			
			$sql = $conn->query('select * from alumno');
			$resultado = $sql->fetchAll();
			foreach($resultado as $row)
				{
					echo "<br> Nombre:".$row["Nombre"];
					echo "<br> Telefono :".$row["Telefono"];
					echo "<br> Direccion:".$row["Direccion"];
				}
			
		/*
			$idbuscar = $_POST[idformulario];
			$idbuscar = $_GET[idformulario];
			
			$idbuscar= 41;
			$sql = $conn->prepare('select * from personas where id = ?');
			$sql->bindParam(1,$idbuscar,PDO::PARAM_INT);
			$sql->execute();
			$resultado = $sql->fetchAll();
			foreach($resultado as $row)
				{
					echo "<br> id :".$row["id"];
					echo "-- nombre :".$row["nombre"];
				}
				
			
			$sql = $conn->prepare('select * from personas where id = :id');			
			$sql->execute(array('id'=>'dasdasd'));
			$resultado = $sql->fetchAll();
			foreach($resultado as $row)
				{
					echo "<br> id :".$row["id"];
					echo "-- nombre :".$row["nombre"];
				}	
			
	
			$personas[0]["nombre"]= "juan";
			$personas[0]["edad"]= 20;
			$personas[0]["descripcion"]= "des juan";
			
			$personas[1]["nombre"]= "pedro";
			$personas[1]["edad"]= 25;
			$personas[1]["descripcion"]= "des pedro";
			
			$personas[2]["nombre"]= "maria";
			$personas[2]["edad"]= 17;
			$personas[2]["descripcion"]= "des maria";
			
			$conn->beginTransaction();
			$sql = $conn->prepare('insert into personas (nombre, edad, descripcion) values (?,?,?)');
			foreach($personas as $valor)
				{
					$sql->execute(
						array($valor["nombre"],$valor["edad"],$valor["descripcion"])
					);
				}
			$id_db = $conn->lastInsertId();
			echo "ultimo id: $id_db ";
			$conn->commit();*/
			
			
			
			
			
			$conn = null;
		}
	catch(PDOException $e)
		{
			echo "mi error es: ".$e->getMessage();
		}
