<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include_once("topo.php");  // incluindo o menu na página

// variavel que recebe codigo passado pelo link
$cod = $_GET['cod']; 
$cod2 = $_GET['cod2'];
$cod3 = $_GET['cod3'];

		$sql = "select cd_atividade, nm_tarefa,dt_inicio,dt_Final,ds_status,ds_prioridade,ds_atividade,ds_obs from vw_atividade where cd_Atividade = '$cod'";
		$query = mysqli_query($con, $sql); // executando variavel $sql
		// criando um vetor da consulta recebida
		$linha = mysqli_fetch_array($query);		
	
		
		$sql1 = "select cd_Contrato, nm_Projeto from tbl_Contrato where cd_Contrato = '$cod3' union select cd_Contrato, nm_Projeto from tbl_Contrato where cd_Contrato != '$cod3'";
		$b = mysqli_query($con, $sql1); // executando variavel $sql
		// criando um vetor da consulta recebida
		
		$sql2 = "select cd_consultor, nm_consultor from tbl_Consultor where cd_consultor = '$cod2' union select cd_consultor, nm_consultor from tbl_Consultor where cd_consultor != '$cod2'";
		$c = mysqli_query($con, $sql2); // executando variavel $sql
		// criando um vetor da consulta recebida

		
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash2.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">

<title>Area Restrita Project Centre</title>
</head>
<body>

    <div class="container">
		
	
        <h1>Exclusão de Atividades</h1>
        
            <form name="frmContrato" method="post" action="excluirdemanda.php">
				<select name="sltContrato">					
					<<?php
						if (mysqli_num_rows($b) > 0) {
						
						while($dados = mysqli_fetch_array($b)){
							echo '<option value='.$dados['cd_Contrato'].'>'.$dados['nm_Projeto'].'</option>';
						}
					}
					mysqli_close($con); // encerrando a conexão com banco de dados.
					?>
				</select>
				<select name="sltConsultor">
					<?php 
						if (mysqli_num_rows($c) > 0) {						
						while($dados = mysqli_fetch_array($c)){
						echo '<option value='.$dados['cd_consultor'].'>'.$dados['nm_consultor'].'</option>';
							}
						}					
					?>				
				</select>                				
				 
				
				<input type="text" name="txtTarefa" value="<?php echo $linha['nm_tarefa']; ?>"><br>
				
					<?php
						$i = $linha['dt_inicio'];
						$f = $linha['dt_final'];
					
					$dti = implode('/', array_reverse(explode('-', $i)));
					$dtf = implode('/', array_reverse(explode('-', $f)));
					?>
				
                <input type="text" name="txtDatainicial" value="<?php echo $dti; ?>"><br>
                <input type="text" name="txtDataFinal" value="<?php echo $dtf; ?>"><br><br>
                
                 <select name="sltStatus">
					<?php if ($linha['ds_status'] == A) {
						echo '<option value="A" selected>Ativo</option>';
						echo '<option value="I">Inativo</option>';
					} 
					else{
						echo '<option value="A">Ativo</option>';
						echo '<option value="I" selected>Inativo</option>';
						}
					?>
				</select><br>
				
				<select name="sltPrioridade">
					<?php 
					if ($linha['ds_prioridade'] == A) {
						echo '<option value="A" selected>Alta</option>';
						echo '<option value="M">Média</option>';
						echo '<option value="B">Baixa</option>';
					} 
					else if ($linha['ds_prioridade'] == M){
						echo '<option value="A">Alta</option>';
						echo '<option value="M" selected>Média</option>';
						echo '<option value="B">Baixa</option>';
						}
						
					else{
						echo '<option value="A">Alta</option>';
						echo '<option value="M">Média</option>';
						echo '<option value="B" selected>Baixa</option>';
					}
					?>
				</select><br>
				<textarea name="txtDescricao"><?php echo $linha['ds_atividade']; ?></textarea><br>
				<textarea name="txtObs"><?php echo $linha['ds_obs']; ?></textarea><br>            
				<input type="hidden" name="txtcodoc" value="<?php echo $linha['cd_atividade'] ?>">
                
                <input type="submit" value="Excluir" class="botVermelho"><br>
            </form>
        
    </div>


</body>
</html>

