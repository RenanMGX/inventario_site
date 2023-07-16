<?php 
	include ("ip.php");
	include ("estrutura/menu.php");
	echo ("<style type='text/css'>");
	include ("style.css");
	echo ("</style>");
	;
	
	$id_del = $_POST['id'];
	
	if ($id_del == ""){
		header ("LOCATION: $inicio/descri.php?id=$id_del");
		exit;
	}
	$query_del = sprintf ("SELECT * FROM descri Where data_c = '$id_del'");
	$dados_del = mysql_query ($query_del,$conectar) or print (mysql_error());
	$linha_del = mysql_fetch_assoc ($dados_del);
	$total_del = mysql_num_rows ($dados_del);
	$valor = $linha_del['valor'];
	$servi = $linha_del['servi'];
	$data_c = $linha_del['data_c'];
	$id = $linha_del['id_dono'];
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
<span class="text">Tem certeza que quer apagar este serviço?</br>
<br><br>
Valor: <?php echo $valor?> R$</br></br>
Serviço:<br>&nbsp;&nbsp;&nbsp;<?php echo $servi?></br></br></br></br></br></br></br></br>
<form method="POST" action="dell.php">
<input type="hidden" id="data_c" name="data_c" value="<?php echo $id_del?>"/>
<input type="hidden" id="id" name="id" value="<?php echo $id?>"/>
<input type="submit" value="SIM" class="sim"/>
</form>
<form method="POST" action="<?php echo $inicio?>/descri.php?id=<?php echo $id?>">
<input type="submit" value="NÃO" class="nao"/>
</form>
</span>