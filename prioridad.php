<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
		$var1=true;
		$var2=false;

		$resultado=$var1 && $var2;

		if($resultado==true){
			echo "correcto";
		}else{
			echo "incorrecto";
		}
	?>
	
</body>
</html>