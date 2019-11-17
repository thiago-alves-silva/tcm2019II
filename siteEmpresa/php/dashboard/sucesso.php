<?php
 include "verifica.php";
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Area Restrita Project Centre</title>
</head>
<body>
    <div>
	<?php include_once("topo.php"); ?> 
	</div>
	<div class="margem1">
	    <?php
	    @$pagina = $_GET['pag']; // atribuindo um valor a variavel, via método get
	    if(isset($pagina)){ // se existir algo setado na variavel pagina então
	    include $pagina; // exiba a pagina.
	    }
	    else{ // senão
	        include 'sucesso.html'; // exibir página inicial.
	    }
	    ?>
	</div>
</body>
</html>