<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../../css/styleDash.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Area Restrita Project Centre</title>
<style>
	div#user {
		color: black;
		display: flex;
		align-items: center;
		cursor: pointer;
		position:absolute;
		bottom:.5vw;
		left:4vw;
		font-size: 1.2vw
	}
	div#user img {
		width: 2.5vw;
		border-radius: 50%;
	}
	div#dashboard {
		position: fixed;
		z-index: 1;
		left:.5vw;
		bottom:4vw;
		background-color: white;
		display: none;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
		border-radius: .5vw;
		box-shadow: 0 .5vw 1vw rgba(0,0,0,0.5);
	}
	.flex {display:flex !important;}
	div#dashboard .btnDash {
		text-decoration:none;
		background-color: #ed145b;
		padding: .5vw;
		border-radius: .5vw;
		width: 100%;
		color: white;
		text-align: center;
		margin: 1.5vw 1vw 1vw 1vw;
	}
	div#dashboard .logout {
		text-decoration:none;
		margin-bottom: 1vw;
		color: rgb(130,130,130);
	}
</style>
</head>
<body>
	<?php
		include("verifica.php");
		if(!isset($_SESSION)) { session_start(); }
	?>
	<nav class = "menu"> 
		<a href="../../home.php"><img id="logoHome" src="../../img/icon/logo.png"></a>
		<ul>
			<li id="menuPanel"><a href="#"><img src="../../img/dashboard/register.png">Cadastro</a>
				<ul>
					<li><a href="cadatv.php">Atividade</a></li>
					<li><a href="consultor.php">Consultor</a></li>
					<li><a href="contrato.php">Contrato</a></li>
				</ul>
			</li>
			<li id="menuPanel"><a href="#"><img src="../../img/dashboard/search.png">Consulta</a>
				<ul>
					<li><a href="consanalise.php">Atividade</a></li>
					<li><a href="consultaproj.php">Contrato</a></li>
				</ul>
			</li>
			<li id="menuPanel"><a href="#"><img src="../../img/dashboard/report.png">Relatório</a>
				<ul>
					<li><a href="#">PDF</a></li>
					<li><a href="#">Gráfico</a></li>
				</ul>
			</li>
			<li><a href="../logout.php"><img src="../../img/dashboard/exit.png" id="imgExit">Sair</a></li>
		</ul>
		<?php
			echo "<div id='user'> <p id='username' style='margin-right: .5vw'>".$_SESSION['user']."</p> <img src='../../img/userl.png'> </div>";
			echo "<div id='dashboard'><a href='php/dashboard/indexa.php' class='btnDash'>DASHBOARD</a><a href='php/logout.php' class='logout'>Logout</a></div>";
		?>
	</nav>
	<script>
		document.getElementById('user').addEventListener('click', ()=>{
			document.getElementById('dashboard').classList.toggle('flex')
		})
		document.querySelectorAll('#menuPanel').forEach(e=>{
			e.addEventListener('click', a =>{
				e.childNodes[2].classList.toggle('block')
		})
		})
	</script>
</body>
</html>