<?php
	include ("/../ip.php");
	
	
	$id_del = $_POST['id_del'];
	$query_del = sprintf ("SELECT * FROM users Where id = '$id_del'");
	//$dados_q = mysql_query ("SELECT * FROM users order by data_c desc") or print (mysql_error(0));
	$dados_del = mysql_query ($query_del,$conectar) or print (mysql_error());
	$linha_del = mysql_fetch_assoc ($dados_del);
	$total_del = mysql_num_rows ($dados_del);
	$nome = $linha_del['nome'];
	$placa = $linha_del['placa'];

	$del_query = sprintf ("DELETE FROM users WHERE id = '$id_del'");
	$del_del = mysql_query($del_query,$conectar) or print (mysql_error());
	header ("LOCATION: $inicio");
	
	
	
	?>