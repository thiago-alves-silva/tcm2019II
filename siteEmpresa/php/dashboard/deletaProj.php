<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include "verifica.php";

$cod = $_POST['txtCod'];
$sql = "delete from tbl_Contrato where cd_Contrato = $cod";
$query = mysqli_query($con, $sql); // executando variavel $sql
$linhas = mysqli_affected_rows($con); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...
      header('location:consultaproj.php'); //redirecionando para página de dados inseridos com sucesso.
}
else{ // caso contrário, escreva o texto que estiver entre aspas
	echo "<script>alert('Não foi possível alterar este contrato!')</script>";
      echo "<script>javascript:history.back(-2)</script>";	
}
mysqli_close($con); // encerrando a conexão com banco de dados.
?>