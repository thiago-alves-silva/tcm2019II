<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include "verifica.php";
$cod = $_GET['cod'];
		$sql = "select * from tbl_Contrato where cd_Contrato = '$cod'";
		$query = mysqli_query($con, $sql); // executando variavel $sql
		$row = mysqli_fetch_array($query);
		
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash2.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Excluir Projeto - System Crown</title>
</head>
<body>
    <?php include_once("topo.php"); ?>
    <div class="container" style="margin-top:5vw">
        <h1>Exclusão de Contrato</h1>
            <form name="frmContrato" method="post" action="deletaProj.php">
            <label>Contato</label>
            <input type="text" name="txtContato" value="<?php echo $row['nm_Contato']; ?>" disabled>
            <label>Telefone</label>
            <input type="text" name="txtTelefone" value="<?php echo $row['no_Telefone']; ?>" disabled>
            <label>E-mail</label>
            <input type="text" name="txtEmail" value="<?php echo $row['ds_Email']; ?>" disabled>
            <label>Endereço</label>
            <input type="text" name="txtLogradouro" value="<?php echo $row['ds_logradouro']; ?>" disabled>
            <label>Número</label>
            <input type="text" name="TxtNumeroLogradouro" value="<?php echo $row['no_Logradouro']; ?>" disabled> 
            <label>Complemento</label>
            <input type="text" name="txtComplemento" value="<?php echo $row['ds_Complemento']; ?>" disabled>    
            <label>Bairro</label>
            <input type="text" name="txtBairro" value="<?php echo $row['ds_Bairro']; ?>" disabled>                
            <label>CEP</label>
            <input type="text" name="txtCep" value="<?php echo $row['no_Cep']; ?>" disabled>
            <label>Cidade</label>
            <input type="text" name="txtCidade" value="<?php echo $row['ds_Cidade']; ?>" disabled>
            <label>Estado</label>
            <input type="text" name="txtEstado" value="<?php echo $row['sg_UF']; ?>" disabled>
            <label>Nome do Projeto</label>
            <input type="text" name="txtNomeprojeto" value="<?php echo $row['nm_Projeto']; ?>" disabled>
            <label>Tempo do Projeto</label>
            <input type="text" name="txtTempo" value="<?php echo $row['ds_TempoProj']; ?>" disabled>
            <label>Status</label>
            <select name="sltStatus" disabled>
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
            <textarea name="txtDescricao" disabled><?php echo $row['ds_Projeto']; ?></textarea>
            <input type="hidden" name="txtCod" value="<?php echo $row['cd_Contrato']; ?>">
            <input type="submit" value="Excluir" class="botVermelho">
        </form>
    </div>
</body>
</html>

