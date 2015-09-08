<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
		$db_host="localhost";
		$db_nombre="libreria";
		$db_usuario="root";
		$db_contraseña="root";
		
		$nombre=$_GET["nombre"];
		$usuario=$_GET["usuario"];
		$email=$_GET["email"];
		$contra= $_GET["contraseña"];
		$recontra=$_GET["recontraseña"];
		$requeridos=strlen($usuario) * strlen($email) * strlen($contra) * strlen($recontra);
		
		if($requeridos > 0){
			if($contra===$recontra){
		
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
		if(mysqli_connect_errno()){
			
			echo "Fallo al conectaR DB, avise a su administrador";
			exit();
			
			}
			
			mysqli_set_charset($conexion, "utf8");
			
			//$contra=md5($contra); para encripar las contraseñas

				$consulta="INSERT INTO `libreria`.`usuariosdelibreria` (`nombre`, `usuario`, `email`, `contra`) 
					VALUES ('$nombre', '$usuario', '$email', '$contra')";

			$resultados=mysqli_query($conexion, $consulta);

				if($resultados==false){
						echo"Error en la consulta";
	
							} else {
		
									echo "Registro ingresado exitosamente<br><br>";
									echo"<table><tr><td>$nombre</td></tr>";
									echo"<table><tr><td>$usuario</td></tr></table>";
		
		
									}


				mysqli_close($conexion);
			}else {
				echo"Porfavor ingrese dos contraseñas identicas";
				}
		} else {
			
			echo"Porfavor Rellene todos los campos requeridos";
			
			}
?>
</body>
</html>