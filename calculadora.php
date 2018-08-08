<?php
	
	if(isset($_POST["button"])){
		$numero1=$_POST["num1"];
		$numero2=$_POST["num2"];
		$operacion=$_POST["operacion"];

		calcular($operacion);
	}

	function calcular($calculo){

	
		if(!strcmp("suma",$calculo)){
			global $numero1; global $numero2;
			echo "El resultado es: " . ($numero1+$numero2);
		}

		if(!strcmp("resta",$calculo)){
			global $numero1; global $numero2;
			echo "El resultado es: " . ($numero1-$numero2);
		}

		if(!strcmp("multi",$calculo)){
			global $numero1; global $numero2;

			$resultado=$numero1*$numero2; 

			echo "<p>El resultado es: $resultado</p>";
		}

		if(!strcmp("divi",$calculo)){
			global $numero1; global $numero2;
			echo "El resultado es: " . ($numero1/$numero2);
		}

		if(!strcmp("modulo",$calculo)){
			global $numero1; global $numero2;
			echo "El resultado es: " . ($numero1%$numero2);
		}

	}

?>