<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash2.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Cadastro de Consultor - System Crown</title>
</head>
<body>
	<?php
		include "conexao.php";
		include("verifica.php");
		include("topo.php");
		$sqlCargo = "select nm_Cargo from tbl_cargo";
		$linhas2 = mysqli_query($con, $sqlCargo); // executando variavel $sql
	?>
    <div class="container">
        <h1>Cadastro de Consultor</h1>
		<form name="frmConsultor" method="post" action="insconsulta.php">
			<input type="text" name="txtNome" placeholder="Nome" autocomplete="off" required maxlength="80">
			<input type="text" id="telefone" name="txtTelefone" placeholder="Telefone" autocomplete="off" required>
			<input type="email" name="txtEmail" placeholder="E-mail" autocomplete="off" required maxlength="80">
			<input type="text" name="txtUsuario" placeholder="Usuário" autocomplete="off" required maxlength="20">
			<input type="password" name="txtSenha" placeholder="Senha" required maxlength="8">
			<select name="sltCargo">
				<option value="">Selecione Cargo</option>
				<?php
					if (mysqli_num_rows($linhas2) > 0) {						
					$n=0;
					while($dados = mysqli_fetch_array($linhas2)){
						echo '<option value="'.($n+1).'">'.$dados['nm_Cargo'].'</option>';
						$n = $n+1;
					}
					}
					mysqli_close($con); // encerrando a conexão com banco de dados.
				?>	
			</select>
			<input type="submit" value="Cadastrar" class="botVermelho">
		</form>
	</div>
	<script src='../../scripts/jquery-3.3.1.min.js'></script>
    <script src='../../scripts/jquery.mask.js'></script>
    <script>
        $(document).ready(function () {
            $('#telefone').mask('(00) 00000-0000');
        });
    </script>
</body>
</html>