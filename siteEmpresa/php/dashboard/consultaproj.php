<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include "verifica.php";
// SE o campo select, cujo nome é sltPesquisar estiver setado
// e o campo txtPesquisa estiver setado, ou seja, se os campos
// estiverem com algum valor, execute o que vier depois da chave.	
if(isset($_POST["sltPesquisar"])){
	$pesq = $_POST['sltPesquisar'];
	$sql = "select * from tbl_Contrato where cd_Contrato = '$pesq'";
	$query = mysqli_query($con, $sql); // executando variavel $sql
}
// se as variaves não estiverem setadas atribuir valor vazio as variaveis
// para evitar erro no inicio das páginas de variaveis não definidas
else { $pesq = ""; }
$sqlContrato = "select cd_Contrato, nm_Projeto from tbl_Contrato";
$linhas = mysqli_query($con, $sqlContrato); // executando variavel $sql
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash2.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Consultar Projetos - System Crown</title>
</head>
<body>
<?php include("topo.php");?>
<div class="container" style="width: unset">
	<form name="frmConsulta" method="post" action="consultaproj.php">
		<select name="sltPesquisar">
			<option value="">Selecione o Projeto</option>
				<?php
					if (mysqli_num_rows($linhas) > 0) {						
						while($dados = mysqli_fetch_array($linhas)){
							echo '<option value='.$dados['cd_Contrato'].'>'.$dados['nm_Projeto'].'</option>';
						}
					}
				mysqli_close($con); // encerrando a conexão com banco de dados.
				?>	
		</select>
		<input type="submit" value="Pesquisar" class="botVermelho">
	</form>
	<?php
		// se a variael estiver sltPesquisar estiver setada, execute...
		if(isset($_POST["sltPesquisar"])){
		// se o numero de linhas encotrada na variavel $query for maior 
		// que 0 execute o código abaixo.... No caso criará uma tabela.
			if (mysqli_num_rows($query) > 0) {
				echo '<table id="tabela1">';
				echo '<tr>';
				echo '<th>Código</th>';
				echo '<th>Contato</th>';
				echo '<th>telefone</th>';
				echo '<th>Nome Projeto</th>';
				echo '<th>Cidade</th>';
				echo '<th>Estado</th>';
				echo '<th>Prazo</th>';
				echo '<th>Status</th>';
				echo '<th>Descrição</th>';
				echo '<th colspan="2">Ação</th>';
				echo '</tr>';
						
				// enquanto houver linhas criar um vetor chamado $dados
				while($dados = mysqli_fetch_array($query)){
					echo '<tr>';
						// do vetor $dados carregue apenas nm_Contato
						echo '<td>'.$dados['cd_Contrato'].'</td>';
						echo '<td>'.$dados['nm_Contato'].'</td>';
						// do vetor $dados carregue apenas no_telefone
						echo '<td>'.$dados['no_Telefone'].'</td>';
						echo '<td>'.$dados['nm_Projeto'].'</td>';
						echo '<td style="text-transform:uppercase">'.$dados['ds_Cidade'].'</td>';
						echo '<td style="text-transform:uppercase">'.$dados['sg_UF'].'</td>';
						echo '<td>'.$dados['ds_TempoProj'].'</td>';
						echo '<td>'.$dados['sg_status'].'</td>';
						echo '<td style="font-size:.9vw">'.$dados['ds_Projeto'].'</td>';
						// link na imagem delete, observe que o link está passando um parametro
						echo '<td><a href="deleta.php?cod='.$dados["cd_Contrato"].'" title="Excluir"><img src=imagens/delete.png></a></td>';
						echo '<td><a href="edita.php?cod='.$dados["cd_Contrato"].'" title="Editar"><img src=imagens/edit.png></a></td>';
					echo' </tr>';
				}
				echo '</table>';
			}

		//Caso o numero de linhas for 0 exibir a sseguinte mensagem
		else{
				echo '<p>Nenhum resultado para pesquisa '.$pesq.'</p>';
		}
	}
	else{
		$pesq = ""; // variavel $pesq deve estar zerada
	}
	//encerrando a conexão		 
	?>
</div>
</body>
<html>