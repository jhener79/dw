<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php


		$busc=$_GET["bucar"];
		
		$db_host="localhost";
		$db_nombre="pruebas";
		$db_usuario="root";
		$db_contraseña="root";
		
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
		if(mysqli_connect_errno()){
			
			echo "Fallo al conectaR DB, avise a su administrador";
			exit();
			
			}
			/* mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos").. para usar esta funcion se tenie que eliminar el parametro $db_nombre de $conexion, esto se usa para mostrar un mensaje si el nombre de la base de datos esta mal escrito o no se encuetra */
			
			mysqli_set_charset($conexion, "utf8");

$consulta="SELECT * FROM datospersonales WHERE nombre LIKE '%$busc%'";

$resultados=mysqli_query($conexion, $consulta);

while(($fila=mysqli_fetch_array($resultados))==true){ 
	
	echo"<table width='50%' align='center' border='1'><tr><td>";

echo $fila['nif'] . " </td><td> ";
echo $fila['nombre'] . "</td><td> ";

echo $fila['apellido'] . "</td><td> ";
echo $fila['edad'] . "</td><td> ";
echo $fila['pais'] . "</td><td>  </table>";
echo "<br>";

}

mysqli_close($conexion);
?>


</body>
</html>