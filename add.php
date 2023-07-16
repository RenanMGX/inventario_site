<?php 
	include ("ip.php");
	$valor_r = $_POST['reais'];
	$valor_c = $_POST['centavos'];
	$servi = $_POST['servi'];
	$id = $_POST['id'];
	if ($id == ""){
		header ("LOCATION: $inicio");
		exit;
	}
	$descri_query = sprintf ("SELECT * FROM users WHERE id = '$id'");
	$descri = mysql_query ($descri_query,$conectar) or print (mysql_error());
	$descri_linha = mysql_fetch_assoc ($descri);
	
	$descri_id = $descri_linha['id'];
	if ($descri_id == ""){
		header ("LOCATION: $inicio");
		exit;
	}
	
	if($servi == ""){
		echo ("<meta http-equiv='content-type' content='text/html; charset=UTF-8' /><meta name='keywords' content='website keywords, website keywords' />");
	echo ("<script type='text/javascript'>alert('Escreva a descrição do Serviço')</script>");
	echo ("<style type='text/css'>
		.f{
			font-size: 200%;
		}
		</style>
		<span class='f'>Para retornar <a href='$inicio/adicionar.php?id=$id'>Clique Aqui</a></span>
		");
		exit;
	}
if ($valor_r == ""){
	$valor_r = "0";
}		
if ($valor_c == ""){
	$valor_c = "00";
}
$valor_total = $valor_r.".".$valor_c;

		//Server//
		
		$add_query = sprintf ("INSERT INTO descri SET valor = '$valor_total', servi = '$servi', id_dono = '$id', data = '$date', data_c = '$date_c'");
		$add_insert = mysql_query($add_query,$conectar) or print (mysql_error());
		header ("LOCATION: $inicio/descri.php?id=$id");
	
?>