<?php
include "verifica.php";
include "conexao.php"; // incluindo arquivo de conexao.php

$nm_Contato = $_POST['txtContato']; 
$fone = $_POST['txtTelefone']; 
$email = $_POST['txtEmail'];
$logradouro = $_POST['txtLogradouro'];
$numLogradouro = $_POST['TxtNumeroLogradouro'];
$complemento = $_POST['txtComplemento'];
$bairro = $_POST['txtBairro'];
$cep = $_POST['txtCep'];
$cidade = $_POST['txtCidade'];
$estado = $_POST['txtEstado'];
$nm_Projeto = $_POST['txtNomeprojeto'];
$tempo = $_POST['txtTempo'];
$desc = $_POST['txtDescricao'];
$status = $_POST['sltStatus'];

// variável $sql recebe comando de inserção. 
// Insira na tabela contrato nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sql = "insert into tbl_Contrato values(default,'$nm_Contato','$fone','$email','$logradouro','$numLogradouro','$complemento','$bairro','$cep','$cidade','$estado','$nm_Projeto','$tempo','$desc', $status)";
$query = mysqli_query($con, $sql); // executando variavel $sql
$linhas = mysqli_affected_rows($con); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...

      header('location:sucesso.php'); //redirecionando para página de dados inseridos com sucesso.
}

else{ // caso contrário, escreva o texto que estiver entre aspas
	 header('location:insucesso.php');	
}
mysqli_close($conexao); // encerrando a conexão com banco de dados.
?>