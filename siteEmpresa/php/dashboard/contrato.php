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
        <form name="frmContrato" method="post" action="inscontrato.php">
            <input type="text" name="txtContato" placeholder="Contato" autocomplete="off" maxlength="80" required>
            <input type="text" id="telefone" name="txtTelefone" placeholder="Telefone" autocomplete="off" required>
            <input type="email" name="txtEmail" placeholder="E-mail" autocomplete="off" maxlength="80" required>
            <input type="text" name="txtLogradouro" placeholder="Logradouro" autocomplete="off" maxlength="60" required>
            <input type="text" id="numero" name="TxtNumeroLogradouro" placeholder="Número" autocomplete="off" required>
            <input type="text" name="txtComplemento" placeholder="Complemento" autocomplete="off" maxlength="60">  
            <input type="text" name="txtBairro" placeholder="Bairro" autocomplete="off" maxlength="60" required>                
            <input type="text" id="cep" name="txtCep" placeholder="CEP" autocomplete="off" required>
            <input type="text" name="txtCidade" placeholder="Cidade" autocomplete="off" maxlength="60" required>
            <input type="text" id="estado" name="txtEstado" placeholder="Estado" autocomplete="off" required>
            <input type="text" name="txtNomeprojeto" placeholder="Nome do Projeto" autocomplete="off" maxlength="80" required>
            <input type="text" name="txtTempo" placeholder="Tempo de execução" autocomplete="off" maxlength="10" required>
            <select name="sltStatus" required>
                <option value="">Selecione o status do projeto</option>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
            <textarea placeholder="Descrição do Projeto" name="txtDescricao" maxlength="100"></textarea>
            <input type="submit" value="Cadastrar" class="botVermelho">
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

