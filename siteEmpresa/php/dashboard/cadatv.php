<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include "verifica.php";
$sqlContrato = "select cd_Contrato,nm_Projeto from tbl_Contrato";
$linhas = mysqli_query($con, $sqlContrato); // executando variavel $sql

$sqlConsultor = "select cd_Consultor,nm_Consultor from tbl_Consultor";
$linhas2 = mysqli_query($con, $sqlConsultor); // executando variavel $sql
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash2.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Cadastro de Atividade - System Crown</title>
</head>
<body>
	<?php include("topo.php"); ?>
    <div class="container" style="margin-top:5vw;">
        <h1>Cadastro de Atividades</h1>
		<form name="frmContrato" method="post" action="inscadatv.php">
			<select name="sltContrato" required>
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
			<select name="sltConsultor" required>
				<option value="">Selecione o Consultor</option>
				<<?php
					if (mysqli_num_rows($linhas2) > 0) {
					
					while($dados = mysqli_fetch_array($linhas2)){
						echo '<option value='.$dados['cd_Consultor'].'>'.$dados['nm_Consultor'].'</option>';
					}
				}
				mysqli_close($con); // encerrando a conexão com banco de dados.
				?>
			</select>
			<input type="text" name="txtTarefa" placeholder="Tarefa" maxlength="80" required>
			<input type="date" min="<?php echo date('Y-m-d') ?>" name="txtDatainicial" required>
			<input type="date" min="<?php echo date('Y-m-d') ?>" name="txtDataFinal" required>
			<select name="sltStatus">
				<option value="">Selecione o Status do Projeto</option>
				<option value="A">Ativo</option>
				<option value="I">Inativo</option>
			</select>
			<select name="sltPrioridade">
				<option value="">Selecione a Prioridade do Projeto</option>
				<option value="A">Alta</option>
				<option value="M">Média</option>
				<option value="B">Baixa</option>
			</select>
			<textarea placeholder="Descrição do Projeto" name="txtDescricao" maxlength="255"></textarea>
			<textarea placeholder="Observações" name="txtObs" maxlength="255"></textarea>       
			<input type="submit" value="Cadastrar" class="botVermelho">
		</form>
    </div>
	<script src='../../scripts/jquery-3.3.1.min.js'></script>
    <script src='../../scripts/jquery.mask.js'></script>
    <script>
        $(document).ready(function () {
			$('.data').mask('00/00/0000');
        });
    </script>
</body>
</html>

