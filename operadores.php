<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		table{background:#111111; border:1px solid #000;}
		input{border:gray 0.5px solid;}
		h1{text-align: center; font-weight: 200;}
		td{color:#fff;}
		.validado{color:red;}
		.no_validado{color:blue;}
	</style>
</head>
<body>
<h1>OPERADORES</h1>
<form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
	<table width="15%" align="center">
		<tr>
			<td>Nombre</td>
			<td>
				<label for="nombre_usuario"></label><input type="text"name="nombre_usuario" id="nombre_usuario">
			</td>
		</tr>
		<tr>
			<td>Edad:</td>
			<td>
				<label for="edad_usuario"></label> <input type="text" name="edad_usuario" id="edad_usuario">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="enviar"></td>
		</tr>
	</table>
	

</form>


	
</body>
</html>