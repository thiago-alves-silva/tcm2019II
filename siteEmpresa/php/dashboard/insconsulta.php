<?php
include "verifica.php";
include "conexao.php"; // incluindo arquivo de conexao.php
$nm_Cons = $_POST['txtNome']; // criando variavel que vai receber dados digitados em txtNome
$fone = $_POST['txtTelefone']; // criando variavel que vai receber dados digitados em txtTelefone
$email = $_POST['txtEmail']; //criando variavel que vai receber dados digitados em txtEmail
$usuario = $_POST['txtUsuario'];
$senha = $_POST['txtSenha'];
$cargo = $_POST['sltCargo'];
/* switch($cargo){
      case
} */
echo $cargo;

// variável $sql recebe comando de inserção. 
// Insira na tabela consultor nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sql = "insert into tbl_consultor(nm_Consultor,no_Telefone,ds_Email,nm_Usuario,ds_Senha,nm_Cargo)values('$nm_Cons','$fone','$email','$usuario','$senha','$cargo')";
$query = mysqli_query($con, $sql); // executando variavel $sql
$linhas = mysqli_affected_rows($con); // comando para ver o numero de linhas afetadas

/* if($linhas == 1){  // se o número de linnhas for  igual a 1 então...
      header('location:sucesso.php'); //redirecionando para página de dados inseridos com sucesso.
}

else{ // caso contrário, escreva o texto que estiver entre aspas
	 header('location:insucesso.php');	
}
mysqli_close($con); // encerrando a conexão com banco de dados. */
?>