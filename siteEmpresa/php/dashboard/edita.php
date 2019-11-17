<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include_once("topo.php");  // incluindo o menu na página

// variavel que recebe codigo passado pelo link
$cod = $_GET['cod']; 

		//variável sql recebe um select para encontrar registro
		// que seja semelhante ao código recebido na variável
		$sql = "select * from tbl_Contrato where cd_Contrato = '$cod'";
		$query = mysqli_query($conexao, $sql); // executando variavel $sql
		// criando um vetor da consulta recebida
		$row = mysqli_fetch_array($query);
		
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">

<title>Project Centre</title>
</head>
<body>

    <div class="container">
        <h1>Tela para Edição de Contrato</h1>
        
            <form name="frmContrato" method="post" action="alteraProj.php">
				<!-- carregando as informações do banco no formulário usando comando echo php-->
                <input type="text" name="txtContato" value="<?php echo $row['nm_Contato']; ?>"><br>
                <input type="text" name="txtTelefone" value="<?php echo $row['no_Telefone']; ?>"><br>
                <input type="text" name="txtEmail" value="<?php echo $row['ds_Email']; ?>"><br><br>
                
                <input type="text" name="txtLogradouro" value="<?php echo $row['ds_logradouro']; ?>"><br>
                <input type="text" name="TxtNumeroLogradouro" value="<?php echo $row['no_Logradouro']; ?>"><br>                
                <input type="text" name="txtComplemento" value="<?php echo $row['ds_Complemento']; ?>"><br>                
                <input type="text" name="txtBairro" value="<?php echo $row['ds_Bairro']; ?>"><br>                
                <input type="text" name="txtCep" value="<?php echo $row['no_Cep']; ?>"><br>
                <input type="text" name="txtCidade" value="<?php echo $row['ds_Cidade']; ?>"><br>
                <input type="text" name="txtEstado" value="<?php echo $row['sg_UF']; ?>"><br><br>

                <input type="text" name="txtNomeprojeto" value="<?php echo $row['nm_Projeto']; ?>"><br>
                <input type="text" name="txtTempo" value="<?php echo $row['ds_TempoProj']; ?>"><br>
                <select name="sltStatus">
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
				<textarea name="txtDescricao"><?php echo $row['ds_Projeto']; ?></textarea><br><br>
                <input type="hidden" name="txtCod" value="<?php echo $row['cd_Contrato']; ?>">
				
				<!-- ao clicar no botão submit os dados desta pagina serão
					 enviados para a pagina alteraProj.php que está na
					 prodiedade action="alteraProj.php" do objeto form
				-->
                <input type="submit" value="Alterar" class="botVermelho"><br>
            </form>
        
    </div>


</body>
</html>

