<!DOCTYPE html>

<html>
	<head>
		<title>PHP Diurno</title>
	
	</head>
	
	<body>
	
		<?php include 'menu.php'; ?>
	
		<p>Primeira P�gina PHP</p>
		
		<?php echo "<b>Bloco PHP</b>"; ?>
		
		
		
		<?php 
			
			$numero1 = 30;
			$numero2 = 50;
			
			echo "<br>";
			echo $numero1;
			echo "<br>";
			echo "N�mero 2 = ".$numero2;
			
			$resultado = $numero1 + $numero2;
			echo "<br>";
			echo "Resultado � $resultado";
			
			if($resultado >= 60){
				echo "Aprovado";
			}else{
				echo "Reprovado";
			}
			
			
			for( $i=0; $i<10; $i++){
				echo "<br>$i";
			}
			
		?>
	
	</body>


</html>