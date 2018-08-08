<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css">
		.resaltar{
			color:#f00;
			font-weight:bold; 
		}
	</style>
</head>
<body>
<?php 

	$variable1="Casa";
	$variable2="CASA";

	$resultado=strcmp($variable1,$variable2);// 0 si son igaules, sino 1

	if (!$resultado){

		echo "coinciden";
	}else{

		echo " no coinciden";
	}

?>	

</body>
</html>