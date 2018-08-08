<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 

	$nombre="Luis";
	


	function darNombre(){
		
		global $nombre;

		$nombre="El nombre es" . $nombre;
	}
	

	darNombre();

	echo $nombre; 	

		

?>	

</body>
</html>