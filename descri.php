<html>
<head><meta http-equiv="content-type" content="text/html; charset=UTF-8" /><meta name="keywords" content="website keywords, website keywords" /><title>Motopecas Venda Nova</title></head>
<body>
<?php
	//include//
	include ("ip.php");
	//logica//
	
		//error_reporting(0);

	$id = $_GET["id"];
	if ($id == ""){
		header ("LOCATION: $inicio");
		exit;
	}
	
	//conteudo_include//
	echo ("<style type='text/css'>");
	include ("style.css");
	echo ("</style>");
	
	include ("estrutura/menu.php");
	
	//conteudo_centro//
	$descri_query = sprintf ("SELECT * FROM users WHERE id = '$id'");
	$descri = mysql_query ($descri_query,$conectar) or print (mysql_error());
	$descri_linha = mysql_fetch_assoc ($descri);
	$descri_nome = $descri_linha['nome'];
	$descri_placa = $descri_linha['placa'];
	$descri_km = $descri_linha['km'];
	$descri_data = $descri_linha['data'];
	$descri_id = $descri_linha['id'];
	if ($descri_id == ""){
		header ("LOCATION: $inicio/descri.php?id=$id");
		exit;
	}
	
	?>
	<style type="text/css">
	<!--
	#alterar {
		color: blue;
	}
	#alterar:hover {
		color: red;
	}
	
	-->
	</style>
	<div id="descri">
	<div class="descri1">
	<span class="text">
	Dados Cadastrados!</br>
	<br><br>Nome : <?php echo $descri_nome?><span class="text2"><a href="alterar.php?id=<?php echo $descri_id ?>" id="alterar">Alterar</a></span>
	<br><br>Placa: <?php echo $descri_placa?><span class="text2"><a href="alterar.php?id=<?php echo $descri_id ?>" id="alterar">Alterar</a></span>
	<br><br>Kilometragem: <?php echo $descri_km?> Km<span class="text2"><a href="alterar.php?id=<?php echo $descri_id ?>" id="alterar">Alterar</a></span>
	<br><br>Data da Inclusão: <?php echo $descri_data?>
	</span>
	</div>
<?php
	
	$servi_query = sprintf ("SELECT * FROM descri WHERE id_dono = '$id' order by data_c desc");
	$servi = mysql_query ($servi_query,$conectar) or print (mysql_error());
	$servi2 = mysql_query ($servi_query,$conectar) or print (mysql_error());
	
	$servi_total = mysql_query ("SELECT * FROM descri WHERE id_dono = '$id'");
	$nun_total = mysql_num_rows ($servi_total);
	
	
	
	
	
	$t1 = "25";
	$t2 = "25";
	$t3 = "0.01";
	$soma = $t1+$t2+$t3;
	
	$resultado = 0;
while ($total_linha = mysql_fetch_object ($servi2)){
		$t_valor = $total_linha->valor;
		
		$resultado = $resultado+$t_valor;
			
	}
	$resultado = $resultado+"0.01";

?>
	<div class="descri2">
	<span class="text">
	Valor Total: <?php echo $resultado ?> R$
	<br>
	<br>
	<br>
	<br><a href="adicionar.php?id=<?php echo $id ?>" class="add2">Adicionar Novo serviço</a>
<?php 

?>
	</span>
	</div>
	<?php
		// Serviçosssss//
		
		
		
		
	?>
	</div>
	<div id="topic4">
	<div class="valor">Valor</div>
	<div class="data-i2">Data</div>
	<div class="ser">Serviço</div>
	</div>
	<?php
	
	while ($servi_linha = mysql_fetch_object ($servi)){
		$s_valor = $servi_linha->valor;
		$s_data = $servi_linha->data;
		$s_servi = $servi_linha->servi;
		$s_data_c = $servi_linha->data_c;
		
		echo ("<div id='topic5'>
	<div class='valor'>$s_valor R$</div>
	<div class='data-i2'>$s_data</div>
	<div class='servico'>$s_servi</div>
	<form method='POST' action='dell_p.php'>
	<input type='hidden' name='id' id='id' value='$s_data_c'/>
	<input type='submit' value='X'/>
	</form>
	</div>");
		
	}
	
	?>
	
		</div>
	
	<?php
	//conteudo_include2//


?>
</body>
</html> 