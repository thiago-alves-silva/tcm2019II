<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash2.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Area Restrita Project Centre</title>
</head>
<body>
	<?php include("verifica.php"); include("topo.php"); ?>
    <div class="container">
        <h1>Cadastro de Consultor</h1>
		<form name="frmConsultor" method="post" action="insconsulta.php" onSubmit="return validaCampos()">
			<input type="text" name="txtNome" placeholder="Nome" autocomplete="off" required><br>
			<input type="tel" name="txtTelefone" placeholder="Telefone" autocomplete="off" required><br>
			<input type="email" name="txtEmail" placeholder="E-mail" autocomplete="off" required><br>
			<input type="text" name="txtUsuario" placeholder="Usuário" autocomplete="off" required><br>
			<input type="password" name="txtSenha" placeholder="Senha" required><br>
			<select name="sltCargo">
				<option value="0">Selecione Cargo</option>
				<option value="1">Anal.Banco de Dados</option>
				<option value="2">Anal. de Sistemas</option>
				<option value="3">Desenv. Back-end</option>
				<option value="4">Desenv. Front-end</option>
				<option value="5">Desenv. Mobile</option>
				<option value="6">Infraestrutura</option>
			</select><br><br>
			<input type="submit" value="Cadastrar" class="botVermelho"><br>
		</form>
    </div>
</body>
</html>