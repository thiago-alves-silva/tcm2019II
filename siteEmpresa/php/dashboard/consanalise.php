<?php
include "conexao.php"; // incluindo arquivo de conexao.php


if(isset($_POST["sltProjeto"]) && isset($_POST["sltCargo"])){

// atribuindo o valor do item selecionado em sltPesquisar na variavel $tipoCons
$proj = $_POST['sltProjeto'];
 
 // atribuindo o valor de texto que estiver em txtPesquisa na variavel $pesq
$cargo = $_POST['sltCargo'];

	if($cargo == "Tudo"){
		$sql = "select * from vw_atividade where nm_projeto like '%$proj%'";		
		$consulta = mysqli_query($conexao, $sql); // executando variavel $sql	
		$numero = mysqli_num_rows($consulta);
	}
	
	else{
		$sql = "select * from vw_atividade where nm_projeto like '%$proj%' and nm_cargo like '%$cargo%'";
		$consulta = mysqli_query($con, $sql); // executando variavel $sql	
		$numero = mysqli_num_rows($consulta);
	}
}

// se as variaves não estiverem setadas atribuir valor vazio as variaveis
// para evitar erro no inicio das páginas de variaveis não definidas
else{
	$proj = "";
	$cargo = "";
}


$sqlContrato = "select nm_Projeto from tbl_Contrato";
$linhas = mysqli_query($con, $sqlContrato); // executando variavel $sql

$sqlCargo = "select nm_Cargo from tbl_Cargo";
$linhas2 = mysqli_query($con, $sqlCargo); // executando variavel $sql

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash2.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">

<title>consulta Projetos</title>

</head>

<body>
<div class="container">
	<form name="frmConsulta" method="post" action="arearestrita.php?pag=consanalise.php">
		<p>Pesquisar Projetos: 
		<select name="sltProjeto">
			<option value="">Selecione o Projeto</option>
					<?php
						if (mysqli_num_rows($linhas) > 0) {						
						while($dados = mysqli_fetch_array($linhas)){
							echo '<option value='.$dados['nm_Projeto'].'>'.$dados['nm_Projeto'].'</option>';
						}
					}
					mysqli_close($con); // encerrando a conexão com banco de dados.
					?>			
		</select><br>
		
		<p>Pesquisar cargo:
		<select name="sltCargo">
			<option value="">Selecione</option>
			<option value="Tudo">Todos</option>
			<?php
						if (mysqli_num_rows($linhas2) > 0) {						
						while($dados = mysqli_fetch_array($linhas2)){
							echo '<option value='.$dados['nm_Cargo'].'>'.$dados['nm_Cargo'].'</option>';
						}
					}
					mysqli_close($con); // encerrando a conexão com banco de dados.
					?>			
		</select><br>
		
		<input type="submit" value="Pesquisar" class="botVermelho"><br>
		<br>
		
	</form>
	<?php
		if(isset($_POST["sltProjeto"]) && isset($_POST["sltCargo"])){
				echo 'Resultado da busca do projeto: '.$proj.'<br><br>';
				if ($numero > 0) {
					echo '<table id="tabela1">';
					echo '<tr>';
					echo '<th>Consultor</th>';
					echo '<th>Projeto</th>';
					echo '<th>Tarefa</th>';					
					echo '<th>Inicio</th>';
					echo '<th>Fim</th>';
					echo '<th>Status</th>';
					echo '<th>Prioridade</th>';
					echo '<th>Excluir</th>';
					echo '<th>Alterar</th>';
					echo '</tr>';
					
			// enquanto houver linhas criar um vetor chamado $dados
			while($dados = mysqli_fetch_array($consulta)){
				echo '<tr>';
					$i = $dados['dt_inicio'];
					$f = $dados['dt_final'];
					
					$dti = implode('/', array_reverse(explode('-', $i)));
					$dtf = implode('/', array_reverse(explode('-', $f)));
					
					$status = $dados['ds_status'];
					if($status == "A"){ $novostatus = "Ativo";} else { $novostatus = "inativo";}
					
					$pri = $dados['ds_prioridade'];
					if($pri == "A"){$novapri = "Alta";} else if($pri == "M") {$novapri = "Média";} else {$novapri = "Baixa";}
					
					echo '<td>'.$dados['nm_consultor'].'</td>';
					echo '<td>'.$dados['nm_projeto'].'</td>';
					echo '<td>'.$dados['nm_tarefa'].'</td>';					
					echo '<td>'.$dti.'</td>';
					echo '<td>'.$dtf.'</td>';
					echo '<td>'.$novostatus.'</td>';
					echo '<td>'.$novapri.'</td>';
					echo '<td><a href="deletademanda.php?cod='.$dados["cd_atividade"].'&cod2='.$dados["cd_consultor"].'&cod3='.$dados["cd_Contrato"].'"><img src=imagens/delete.png></a></td>';
					echo '<td><a href="editademanda.php?cod='.$dados["cd_atividade"].'&cod2='.$dados["cd_consultor"].'&cod3='.$dados["cd_Contrato"].'"><img src=imagens/edit.png></a></td>';
	
					echo' </tr>';
					
				}
			echo '</table>';
		}

	//Caso o numero de linhas for 0 exibir a sseguinte mensagem
	else{
			echo '<p>Nenhum resultado para pesquisa.</p>';
		}
	}
	else{
		$proj = "";
	    $cargo = "";
	}
	?>
	
</div>
</body>
<html>