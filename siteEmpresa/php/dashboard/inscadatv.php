<?php
include "conexao.php"; // incluindo arquivo de conexao.php

$tarefa = $_POST['txtTarefa'];
$consultor = $_POST['sltConsultor'];
$ds = $_POST['txtDescricao'];
$dtinicial = $_POST['txtDatainicial'];
$dti = implode('-', array_reverse(explode('/', $dtinicial)));
$dtfinal = $_POST['txtDataFinal'];
$dtf = implode('-', array_reverse(explode('/', $dtfinal)));
$status = $_POST['sltStatus'];
$obs = $_POST['txtObs'];
$prio = $_POST['sltPrioridade'];
$contrato = $_POST['sltContrato'];

/*
echo $tarefa.'<br>';
echo $consultor.'<br>';
echo $ds.'<br>';
echo $dti.'<br>';
echo $dtf.'<br>';
echo $status.'<br>';
echo $obs.'<br>';
echo $prio.'<br>';
echo $contrato.'<br>';
*/


// variável $sql recebe comando de inserção. 
// Insira na tabela consultor nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sql = "insert into tbl_Atividade(nm_tarefa,cd_Consultor,ds_atividade,dt_inicio,dt_Final,ds_Status,ds_Obs,ds_prioridade,cd_Contrato)values('$tarefa',$consultor,'$ds','$dti','$dtf','$status','$obs','$prio',$contrato)";
$query = mysqli_query($conexao, $sql); // executando variavel $sql
$linhas = mysqli_affected_rows($conexao); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...

      header('location:sucesso.php'); //redirecionando para página de dados inseridos com sucesso.
}

else{ // caso contrário, escreva o texto que estiver entre aspas
	 header('location:insucesso.php');	
}
mysqli_close($conexao); // encerrando a conexão com banco de dados.

?>