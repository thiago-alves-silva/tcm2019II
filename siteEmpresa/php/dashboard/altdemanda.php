<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include "verifica.php";
// Abaixo as variaveis que conterão os dados recebidos 
// do formulário

$cd = $_POST['txtcodoc'];
$tarefa = $_POST['txtTarefa'];
$consultor = $_POST['sltConsultor'];
$desc = $_POST['txtDescricao'];
$dtinicial = $_POST['txtDatainicial'];
$dtfinal = $_POST['txtDataFinal'];
$status = $_POST['sltStatus'];
$obs = $_POST['txtObs']; 
$pri = $_POST['sltPrioridade'];
$contrato = $_POST['sltContrato'];

// comando que contem o update
$sql = "update tbl_Atividade set nm_tarefa='$tarefa',cd_Consultor=$consultor,ds_atividade='$desc',dt_inicio='$dtinicial',dt_Final='$dtfinal',ds_Status='$status',ds_Obs='$obs',ds_prioridade='$pri',cd_Contrato='$contrato' where cd_atividade = '$cd'";
$query = mysqli_query($con, $sql); // executando variavel $sql
$linhas = mysqli_affected_rows($con); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...
      header('location:consanalise.php'); //redirecionando para página de dados inseridos com sucesso.
}

else{ // caso contrário, escreva o texto que estiver entre aspas
      echo "<script>alert('Não foi possível alterar este contrato!')</script>";
      echo "<script>javascript:history.back(-2)</script>";
}
mysqli_close($con); // encerrando a conexão com banco de dados.
?>