<?php

	include "conexao.php"; // incluindo arquivo de conexao.php

	$sqlContrato = "select cd_Contrato, nm_Projeto from tbl_Contrato";
	$linhas = mysqli_query($conexao, $sqlContrato); // executando variavel $sql

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">

<title>Relatórios</title>

</head>

<body>
<div class="container">
	<form name="frmConsulta" method="post" action="resultadorelproj.php">
		
		<h1>Relatórios de Funcionários envolvidos em Projetos</h1>
		<p>Pesquisar Projetos: 
		<select name="sltProjeto">
			<option value="">Selecione o Projeto</option>
					<?php
						if (mysqli_num_rows($linhas) > 0) {						
						while($dados = mysqli_fetch_array($linhas)){
							echo '<option value='.$dados['cd_Contrato'].'>'.$dados['nm_Projeto'].'</option>';
						}
					}
					mysqli_close($conexao); // encerrando a conexão com banco de dados.
					?>			
		</select><br>
		
	
		<input type="submit" value="Pesquisar" class="botVermelho"><br>
		<br>
		
	</form>

	
</div>
</body>
<html>