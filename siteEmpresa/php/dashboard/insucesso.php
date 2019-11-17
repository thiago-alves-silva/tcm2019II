<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
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
	<!-- carregando a pagina topo através de um include -->
	<?php include_once("indexa.php"); ?> 
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