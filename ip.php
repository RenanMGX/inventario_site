<?php
	//DATA//
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('d/m/Y - H:i');
	$date_c = date('YmdHis');
	//---///

	$inicio = "http://127.0.0.1";
	$local = "localhost";
	$user = "root";
	$pass = "";
	$data_base = "dados";
	
	$conectar = mysql_connect ($local,$user,$pass) or print (mysql_error());
	$db = mysql_select_db ("dados",$conectar) or print (mysql_error());
	$query = sprintf ("SELECT * FROM users Where data order by id desc");
	$dados_q = mysql_query ("SELECT * FROM users order by data_c desc") or print (mysql_error(0));
	$dados = mysql_query ($query,$conectar) or print (mysql_error());
	$linha = mysql_fetch_assoc ($dados);
	$total = mysql_num_rows ($dados);
	
	
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /><meta name="keywords" content="website keywords, website keywords" />