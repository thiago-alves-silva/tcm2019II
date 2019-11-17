<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash2.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Area Restrita Project Centre</title>
</head>
<body>
    <?php include("verifica.php"); include("topo.php");?>
    <div class="container" style="margin-top: 5vw">
        <h1>Cadastro de Contrato</h1>
        <form name="frmContrato" method="post" action="insContrato.php">
            <input type="text" name="txtContato" placeholder="Contato" autocomplete="off" required><br>
            <input type="text" name="txtTelefone" placeholder="Telefone" autocomplete="off" required><br>
            <input type="text" name="txtEmail" placeholder="E-mail" autocomplete="off" required><br><br>
            <input type="text" name="txtLogradouro" placeholder="Logradouro" autocomplete="off" required><br>
            <input type="text" name="TxtNumeroLogradouro" placeholder="Número" autocomplete="off" required><br>
            <input type="text" name="txtComplemento" placeholder="Complemento" autocomplete="off" required><br>  
            <input type="text" name="txtBairro" placeholder="Bairro" autocomplete="off" required><br>                
            <input type="text" name="txtCep" placeholder="CEP" autocomplete="off" required><br>
            <input type="text" name="txtCidade" placeholder="Cidade" autocomplete="off" required><br>
            <input type="text" name="txtEstado" placeholder="Estado" autocomplete="off" required><br><br>
            <input type="text" name="txtNomeprojeto" placeholder="Nome do Projeto" autocomplete="off" required><br>
            <input type="text" name="txtTempo" placeholder="Tempo de execução" autocomplete="off" required><br>
            <select name="sltStatus" required>
                <option value="">Selecione o status do projeto</option>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
            <textarea placeholder="Descrição do Projeto" name="txtDescricao"></textarea><br><br>
            <input type="submit" value="Cadastrar" class="botVermelho"><br>
        </form>
    </div>
</body>
</html>

