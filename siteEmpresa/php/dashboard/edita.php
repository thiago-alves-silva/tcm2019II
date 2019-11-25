<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include "verifica.php";
// variavel que recebe codigo passado pelo link
$cod = $_GET['cod']; 
		//variável sql recebe um select para encontrar registro
		// que seja semelhante ao código recebido na variável
		$sql = "select * from tbl_Contrato where cd_Contrato = '$cod'";
		$query = mysqli_query($con, $sql); // executando variavel $sql
		// criando um vetor da consulta recebida
		$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash2.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Editar Projeto - System Crown</title>
</head>
<body>
	<?php include("topo.php");?>
    <div class="container" style="margin-top:5vw;">
        <h1>Alterar Contrato</h1>
            <form name="frmContrato" method="post" action="alteraProj.php">
				<!-- carregando as informações do banco no formulário usando comando echo php-->
				<label>Contato</label>
				<input type="text" name="txtContato" value="<?php echo $row['nm_Contato']; ?>" maxlength="80" autocomplete="off" required>
				<label>Telefone</label>
				<input type="text" id="telefone" name="txtTelefone" value="<?php echo $row['no_Telefone']; ?>" autocomplete="off" required>
				<label>E-mail</label>
				<input type="text" name="txtEmail" value="<?php echo $row['ds_Email']; ?>" maxlength="80" autocomplete="off" required>
				<label>Endereço</label>
				<input type="text" name="txtLogradouro" value="<?php echo $row['ds_logradouro']; ?>" maxlength="60" autocomplete="off" required>
				<label>Número</label>
				<input type="text" id="numero" name="TxtNumeroLogradouro" value="<?php echo $row['no_Logradouro']; ?>" autocomplete="off" required>
				<label>Complemento</label>
				<input type="text" name="txtComplemento" value="<?php echo $row['ds_Complemento'];?>" maxlength="60" autocomplete="off">
				<label>Bairro</label>
				<input type="text" name="txtBairro" value="<?php echo $row['ds_Bairro']; ?>" maxlength="60" autocomplete="off" required>
				<label>CEP</label>
				<input type="text" id="cep" name="txtCep" value="<?php echo $row['no_Cep']; ?>" autocomplete="off" required>
				<label>Cidade</label>
				<input type="text" name="txtCidade" value="<?php echo $row['ds_Cidade']; ?>" maxlength="60" autocomplete="off" required>
				<label>Estado</label>
				<input type="text" id="estado" name="txtEstado" value="<?php echo $row['sg_UF']; ?>" autocomplete="off" required>
				<label>Nome do Projeto</label>
				<input type="text" name="txtNomeprojeto" value="<?php echo $row['nm_Projeto']; ?>" maxlength="80" autocomplete="off" required>
				<label>Tempo do Projeto</label>
				<input type="text" name="txtTempo" value="<?php echo $row['ds_TempoProj']; ?>" maxlength="10" autocomplete="off" required>
				<label>Status</label>
                <select name="sltStatus" autocomplete="off" required>
					<option value="">Selecione o status do projeto</option>
					<?php if ($row['sg_status'] == 1) {
						echo '<option value=1 selected>Ativo</option>';
						echo '<option value=0>Inativo</option>';
					} 
					else{
						echo '<option value=1>Ativo</option>';
						echo '<option value=0 selected>Inativo</option>';
					}
					?>	
				</select>
				<label>Descrição</label>
				<textarea name="txtDescricao"><?php echo $row['ds_Projeto']; ?></textarea>
                <input type="hidden" name="txtCod" value="<?php echo $row['cd_Contrato']; ?>">
				<!-- ao clicar no botão submit os dados desta pagina serão
					 enviados para a pagina alteraProj.php que está na
					 prodiedade action="alteraProj.php" do objeto form
				-->
                <input type="submit" value="Alterar" class="botVermelho">
            </form>
	</div>
	<script src='../../scripts/jquery-3.3.1.min.js'></script>
    <script src='../../scripts/jquery.mask.js'></script>
    <script>
        $(document).ready(function () {
            $('#telefone').mask('(00) 00000-0000');
            $('#cep').mask('00000-000');
            $('#numero').mask('00000');
            $('#estado').mask('SS', {'translation': {
                S: {pattern: /[A-Za-z]/}
            }
            });
        });
    </script>
</body>
</html>

