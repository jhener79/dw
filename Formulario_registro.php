<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
}

h5{
	text-align:center;
	color:#00F;
	width:50%;
	margin:auto;
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<body>
<h1>Registro de Usuarios</h1>
<h5>Los campos con (*) son requeridos</h5>
<form name="form1" method="get" action="Insertar_Registro.php">
  <table border="0" align="center">
    <tr>
      <td>Nombre</td>
      <td><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre"></td>
    </tr>
    <tr>
      <td>*Usuario</td>
      <td><label for="usuario"></label>
      <input type="text" name="usuario" id="usuario"></td>
    </tr>
    <tr>
      <td>*Email</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <td>*Contraseña</td>
      <td><label for="contraseña"></label>
      <input type="password" name="contraseña" id="contraseña"></td>
    </tr>
    <tr>
      <td>*Repetir Contraseña</td>
      <td><label for="recontraseña"></label>
      <input type="password" name="recontraseña" id="recontraseña"></td>
    </tr>
   
   
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>