<?php
	include ("ip.php");
	
	
	$data_c = $_POST['data_c'];
	$id = $_POST['id'];

	$del_query = sprintf ("DELETE FROM descri WHERE data_c = '$data_c'");
	$del_del = mysql_query($del_query,$conectar) or print (mysql_error());
	header ("LOCATION: $inicio/descri.php?id=$id");
	
	
	
	?>