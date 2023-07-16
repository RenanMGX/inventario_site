<?php 
	
	$id_del = $_POST['id_del'];
	if ($id_del == ""){
		header ("LOCATION: $inicio");
		exit;
	}
	$query_del = sprintf ("SELECT * FROM users Where id = '$id_del'");
	$dados_del = mysql_query ($query_del,$conectar) or print (mysql_error());
	$linha_del = mysql_fetch_assoc ($dados_del);
	$total_del = mysql_num_rows ($dados_del);
	$nome = $linha_del['nome'];
	$placa = $linha_del['placa'];
?>	
<style type="text/css">
.sim{
	width: 200px;
	height: 30px;
	margin: 0 0 0 200px;
}
.sim:hover{
	background: rgba(63, 81, 181, 0.6);
}
.nao{
	width: 200px;
	height: 30px;
	margin: 0 0 0 200px;
}
.nao:hover{
	background: rgba(63, 81, 181, 0.6);
}
</style>
<span class="text">Tem certeza que quer apagar esta planilha?</br>
<br><br>
Nome: <?php echo $nome?></br></br>
Placa: <?php echo $placa?></br></br>
<form method="POST" action="centro/dell.php">
<input type="hidden" id="id_del" name="id_del" value="<?php echo $id_del?>"/>
<input type="submit" value="SIM" class="sim"/>
</form>
<form method="POST" action="<?php echo $inicio?>">
<input type="submit" value="NÃO" class="nao"/>
</form>
</span>