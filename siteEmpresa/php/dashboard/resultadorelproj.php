<?php
include './fpdf/fpdf.php';

include "conexao.php"; // incluindo arquivo de conexao.php

$cd = $_POST['sltProjeto'];

	$sqlrelatorio = "select nm_projeto,nm_consultor,nm_cargo from vw_atividade where cd_contrato = '$cd'";
	$linhas = mysqli_query($conexao, $sqlrelatorio); 
	
	$pdf = new FPDF();
	$pdf ->AddPage();
	$pdf ->SetFont('arial','B',16);
	$pdf ->Cell(180,10,utf8_decode('Relatório de Funcionários'),1,0,"C");
	$pdf -> ln(15); // espaçamento entre linhas
	
	$pdf ->SetFont('arial','B',12);
	$pdf ->Cell(60,10,utf8_decode('Projeto'),1,0,"C");
	$pdf ->Cell(60,10,utf8_decode('Funcionário'),1,0,"C");
	$pdf ->Cell(60,10,utf8_decode('Função'),1,0,"C");
	$pdf -> ln(); // sem espaçamento
	
	while($resultado=mysqli_fetch_array($linhas)){
		$pdf ->Cell(60,10,$resultado['nm_projeto'],1,0,"C");
		$pdf ->Cell(60,10,$resultado['nm_consultor'],1,0,"C");
		$pdf ->Cell(60,10,$resultado['nm_cargo'],1,0,"C");
		$pdf -> ln(); // sem espaçamento		
	}
$pdf->Output();
?>