<?php
include "conexao.php"; // incluindo arquivo de conexao.php
include "verifica.php";
// Abaixo as variaveis que conterão os dados recebidos 
// do formulário

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
$cod = $_POST['txtCod'];

// comando que contem o update
$sql = "update tbl_Contrato set nm_Contato='$nm_Contato',no_Telefone='$fone',ds_Email='$email',ds_logradouro='$logradouro',no_Logradouro='$numLogradouro',ds_Complemento='$complemento',ds_Bairro='$bairro',no_Cep='$cep',ds_Cidade='$cidade',sg_UF='$estado',nm_Projeto='$nm_Projeto',ds_TempoProj='$tempo',ds_Projeto='$desc',sg_status=$status where cd_Contrato = '$cod'";
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