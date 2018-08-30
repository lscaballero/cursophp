<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

	$var1=1;
	$var2=7;

	while($var1<6){

		echo "Estamos ejecutando el código, osea es = $var1 <br>";

		$var1++;
	}

	echo "Hemos salido del bucle <br>";


	do{

		echo "Estamos ejecutando el código, osea es = $var2 <br>";

		$var2++;

	}while ($var2<6);

	echo "Hemos salido del bucle";
 ?>
	
</body>
</html>