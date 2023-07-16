<?php 
	include ("ip.php");
	include ("estrutura/menu.php");
	echo ("<style type='text/css'>");
	include ("style.css");
	echo ("</style>");
	;
	
	$id_alt = $_GET['id'];
	
	if ($id_alt == ""){
		header ("LOCATION: $inicio/descri.php?id=$id_alt");
		exit;
	}
	$query_alt = sprintf ("SELECT * FROM users Where id = '$id_alt'");
	$dados_alt = mysql_query ($query_alt,$conectar) or print (mysql_error());
	$linha_alt = mysql_fetch_assoc ($dados_alt);
	$total_alt = mysql_num_rows ($dados_alt);
	$nome = $linha_alt['nome'];
	$placa = $linha_alt['placa'];
	$km = $linha_alt['km'];
	$id = $linha_alt['id'];
?>	
<style type="text/css">
<!--
#table {
	background: rgba(0, 0, 255, 0.32);
	height: 400px;
	width: 1000px;
	padding: 10 0 0 0;
}
.alt {
	height: 390px;
	width: 750px;
	margin: 0 0 0 100;
}
#nome{
	display: Block;
	margin: 0 0 10 0;
	height: 30px;
	font-size: 20px;
}
#placa{
	display: Block;
	margin: 0 0 10 0;
	height: 30px;
	font-size: 20px;
}
#km{
	display: Block;
	margin: 0 0 30 0;
	height: 30px;
	font-size: 20px;
}
#alt {
	height: 40px;
	width: 200px;
	font-size: 30px;
	border: none;
	cursor: pointer;
}
#alt:hover {
	background: rgb(76, 247, 76);
}
-->
</style>
<div id="table">
<div class="alt">
<span class="text">
Alteração de Dados:
<br><br>
<form method="POST" action="alt.php">
Nome:  <input type="text" id="nome" name="nome" value="<?php echo $nome ?>"/>

Placa:  <input type="text" id="placa" name="placa" value="<?php echo $placa ?>"/>

Kilometragem:  <input type="text" id="km" name="km" value="<?php echo $km ?>"/>
<input type="hidden" id="id" name="id" value="<?php echo $id ?>"/>
<input type="submit" name="alt" id="alt" value="Alterar"/>
</form>
</span>

</div>
</div>