<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include "verifica.php";
$tarefa = $_POST['txtTarefa'];
$consultor = $_POST['sltConsultor'];
$ds = $_POST['txtDescricao'];
$dtinicial = $_POST['txtDatainicial'];
$dtfinal = $_POST['txtDataFinal'];
$status = $_POST['sltStatus'];
$obs = $_POST['txtObs'];
$prio = $_POST['sltPrioridade'];
$contrato = $_POST['sltContrato'];

// variável $sql recebe comando de inserção. 
// Insira na tabela consultor nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sql = "insert into tbl_Atividade(nm_tarefa,cd_Consultor,ds_atividade,dt_inicio,dt_Final,ds_Status,ds_Obs,ds_prioridade,cd_Contrato)values('$tarefa',$consultor,'$ds', '$dtinicial','$dtfinal','$status','$obs','$prio',$contrato)";
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