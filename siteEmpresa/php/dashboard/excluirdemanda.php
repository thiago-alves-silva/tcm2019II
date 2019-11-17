<?php
include "conexao.php"; // incluindo arquivo de conexao.php

// Abaixo as variaveis que conterão os dados recebidos 
// do formulário

$cd = $_POST['txtcodoc'];

$sql = "delete from tbl_Atividade where cd_atividade = $cd";
$query = mysqli_query($conexao, $sql); // executando variavel $sql
$linhas = mysqli_affected_rows($conexao); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...

      header('location:sucessodel.php'); //redirecionando para página de dados inseridos com sucesso.
}

else{ // caso contrário, escreva o texto que estiver entre aspas
	 header('location:insucessodel.php');	
}
mysqli_close($conexao); // encerrando a conexão com banco de dados.
?>