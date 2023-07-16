<?php
	include ("ip.php");
	
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$placa = $_POST['placa'];
	$km = $_POST['km'];
	
	if ($nome == ""){
		echo "Favor digitar o NOME<br>
		<a href='$inicio/alterar.php?id=$id'>clique</a> para retornar!";
		exit;
	}
	if ($placa == ""){
		echo "Favor digitar o Placa<br>
		<a href='$inicio/alterar.php?id=$id'>clique</a> para retornar!";
		exit;
	}
	if ($km == ""){
		echo "Favor digitar o Kilometragem<br>
		<a href='$inicio/alterar.php?id=$id'>clique</a> para retornar!";
		exit;
	}
	
	$alt_nome = "UPDATE users SET nome = '$nome' WHERE id = '$id'";
	$alt_placa = "UPDATE users SET placa = '$placa' WHERE id = '$id'";
	$alt_km = "UPDATE users SET km = '$km' WHERE id = '$id'";
	
	$alt = mysql_query ($alt_nome, $conectar) or print (mysql_error(0));
	$alt = mysql_query ($alt_placa, $conectar) or print (mysql_error(0));
	$alt = mysql_query ($alt_km, $conectar) or print (mysql_error(0));
	header ("LOCATION: $inicio/descri.php?id=$id");
	
	
	?>