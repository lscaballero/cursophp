<?php
	
	if(isset($_POST["enviando"])){ //comprueba que se pulsa el boton enviar
		$usuario=$_POST["nombre_usuario"];
		$edad=$_POST["edad_usuario"];

		if($usuario=="Luis" && $edad>=18){
			echo "<p class='validado'>puedes entrar</p>";
		}else{
			echo "<p class='no_validado'> no puedes entrar</p>";
		}

	}

?>

<style>
		table{background:#111111; border:1px solid #000;}
		input{border:gray 0.5px solid;}
		h1{text-align: center; font-weight: 200;}
		td{color:#fff;}
		.validado{color:red;}
		.no_validado{color:blue;}
	</style>