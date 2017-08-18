<?php ob_start();?>

<p>Bem vindo<p>

<?php 

$titulo = "PHP Home";
$conteudo = ob_get_contents();
ob_clean();

include 'template.php';


?>
