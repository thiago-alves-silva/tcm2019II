<?php
include "verifica.php";
include "conexao.php"; // incluindo arquivo de conexao.php
$nm_Cons = $_POST['txtNome']; // criando variavel que vai receber dados digitados em txtNome
$fone = $_POST['txtTelefone']; // criando variavel que vai receber dados digitados em txtTelefone
$email = $_POST['txtEmail']; //criando variavel que vai receber dados digitados em txtEmail
$usuario = $_POST['txtUsuario'];
$senha = $_POST['txtSenha'];
$cdcargo = $_POST['sltCargo'];
$cargo = "";
switch($cdcargo){
      case 1: $cargo = "Analista de Banco de Dados"; break;
      case 2: $cargo = "Analista de Sistemas"; break;
      case 3: $cargo = "Desenvolvedor Back-end"; break;
      case 4: $cargo = "Desenvolvedor Front-end"; break;
      case 5: $cargo = "Desenvolvedor Mobile"; break;
      case 6: $cargo = "Infraestrutura"; break;
}
// variável $sql recebe comando de inserção. 
// Insira na tabela consultor nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sql = "insert into tbl_consultor(nm_Consultor,no_Telefone,ds_Email,nm_Usuario,ds_Senha,nm_Cargo, cd_Cargo)values('$nm_Cons','$fone','$email','$usuario','$senha','$cargo', $cdcargo)";
$sql2 = "insert into usuarios(nome,login,senha, email)values('$nm_Cons','$usuario',md5('$senha'),'$email')";
$query = mysqli_query($con, $sql); // executando variavel $sql
$query2 = mysqli_query($con, $sql2); // executando variavel $sql

$linhas = mysqli_affected_rows($con); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...
      header('location:cadatv.php'); //redirecionando para página de dados inseridos com sucesso.
}
else{ // caso contrário, escreva o texto que estiver entre aspas
	echo "<script>alert('Não foi possível alterar este contrato!')</script>";
      echo "<script>javascript:history.back(-2)</script>";	
}
mysqli_close($con); // encerrando a conexão com banco de dados.
?>