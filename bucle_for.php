<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	//for con break

	// for($i=0;$i<=10;$i++){

	// 	echo "<p> Hemos entrado en el bucle osea i = $i </p>";

	// 	if($i==6){

	// 		echo "<p>bucle interrumpido</p>";

	// 		break;
	// 	}
	// }"<br> <br>"


// for con continu

	for ($var=10;$var>=-10;$var--){ 
		
		if ($var==0) {

			echo "División no es posible <br>";

			continue;
		}

		echo "9 / $var = " . 9/$var . "<br>";
	}


?>
	
</body>
</html>