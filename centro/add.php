<?php 
	include ("/../ip.php");
	$placa = $_POST['placa'];
	$nome = $_POST['nome'];
	$km = $_POST['km'];
	
	if($placa == ""){
	echo ("<script type='text/javascript'>alert('Digite o numero da placa')</script>");
	echo ("<style type='text/css'>
		.f{
			font-size: 200%;
		}
		</style>
		<span class='f'>Para retornar <a href='$inicio/?p=adicionar'>Clique Aqui</a></span>
		");
		exit;
	}
	if($nome == ""){
	echo ("<script type='text/javascript'>alert('Digite o Nome')</script>");
	echo ("<style type='text/css'>
		.f{
			font-size: 200%;
		}
		</style>
		<span class='f'>Para retornar <a href='$inicio/?p=adicionar'>Clique Aqui</a></span>
		");
		exit;
	}
	if ($km == ""){
		$km = "000000";
	}
		
		//Server//
		
		$add_query = sprintf ("INSERT INTO users SET placa = '$placa', nome = '$nome', km = '$km', data = '$date', data_c = '$date_c'");
		$add_insert = mysql_query($add_query,$conectar) or print (mysql_error());
		header ("LOCATION: $inicio");
	
?>