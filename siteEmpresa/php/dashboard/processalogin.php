<?php
	include "conexao.php";

	// session_start inicia a sessão
	session_start();
	// as variáveis login e senha recebem os dados digitados na página anterior
	$login = $_POST['txtUsuario'];
	$senha = $_POST['txtSenha'];
	
	// A variavel $resultLogin pegará os valores das variaveis $login e $senha, 
	//para verificar se os conteúdos existem na tabela de usuarios
	
	$sqlLogin = "select * from tbl_consultor where nm_Usuario ='$login' and ds_Senha = '$senha'";
	$resultLogin = mysqli_query($conexao, $sqlLogin);
	
	/* Logo abaixo temos um bloco com if e else, verificando se a variável $resultLogin foi 
	bem sucedida, ou seja, se ela estiver encontrado algum registro idêntico, o seu valor
	será igual a 1, caso contrario, se não encontrar registros seu valor será 0. Dependendo do 
	resultado o usuário será redirecionado para a página arearestrita.php ou então se houver
	algum erro, o usuario será levado para a página de erro.php que o fará retornar formulário 
	inicial para que se possa tentar novamente realizar o login */
	
	if(mysqli_num_rows($resultLogin) > 0)	  
		{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:arearestrita.php');
		}

	else{
		  unset($_SESSION['login']);
		  unset($_SESSION['senha']);
		  header('location:acessonegado.html');   
		}
	
?>
