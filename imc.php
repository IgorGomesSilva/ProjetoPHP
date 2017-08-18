<?php ob_start();?>


<div class="panel panel-danger">

	<div class="panel-body">
	
		<form action="imc.php" method="post"
			 class="form-horizontal">
		
			<div class="form-group">
				<label>Peso:</label>
				<input name="peso" required type="text" class="form-control">
			
			</div>
			
			<div class="form-group">
				<label>Altura:</label>
				<input name="altura" required type="text" class="form-control">
			
			</div>
			
			<button type="submit" class="btn btn-default">
				Calcular
			</button>
			
			
			<?php 
			
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					
					$peso = $_POST["peso"];
					$altura = $_POST["altura"];
					
					$peso = str_replace(",", ".", $peso);
					$altura = str_replace(",", ".", $altura);
					
					if(is_numeric($peso) 
							&& is_numeric($altura)){
						
						$imc = $peso / ($altura * $altura);
							
						$imcFormatado = number_format($imc,2,",","");
							
						echo "IMC = $imcFormatado";
					}else{
						echo "Valores incorretos";
					}
					
					
					
				}
			
			?>
		
		</form>
	
	</div>

</div>

<?php 
	$titulo = "IMC";
	$conteudo = ob_get_contents();
	ob_clean();
	
	include 'template.php';

?>
