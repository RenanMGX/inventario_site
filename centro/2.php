<?php 

	$busca = $_POST["busca"];
	$tipo = $_POST["tipo"];
	
	if ($busca == ""){
		header ("LOCATION: $inicio");
		exit;
	}
	?>
	<div id="topic">
<div class="placa">Placa</div>
<div class="nome">Nome</div>
<div class="KM">Kilometragem</div>
<div class="data-i">Data da Inclusão</div>
</div>

<div id="topic3">
<div class="placa"></div>
<div class="nome"></div>
<div class="KM"></div>
<div class="data-i"></div>
</div>
	
	<?php
	if ($tipo == "nome"){
	$query_busca = mysql_query ("SELECT * FROM users Where nome LIKE '%".$busca."%'");
	while ($lista = mysql_fetch_object($query_busca)){
		$linha_placa = $lista->placa;
		$linha_nome = $lista->nome;
		$linha_km = $lista->km;
		$linha_data = $lista->data;
		$linha_id = $lista->id;
		$link = "#";
		echo ("
<div id='topic2'><a href='$inicio/descri.php?id=$linha_id''>
<div class='placa'>$linha_placa</div>
<div class='nome'>$linha_nome</div>
<div class='KM'>$linha_km Km</div>
<div class='data-i'>$linha_data</div>
</a><form method='POST' action='$inicio/?p=dell_p'><input type='hidden' value='$linha_id' id='id_del' name='id_del'/><input type='submit' value='X'/></form></div>");
	}
	}
	if ($tipo == "placa"){
	$query_busca = mysql_query ("SELECT * FROM users Where placa LIKE '%".$busca."%'");
	
	while ($lista = mysql_fetch_object($query_busca)){
		$linha_placa = $lista->placa;
		$linha_nome = $lista->nome;
		$linha_km = $lista->km;
		$linha_data = $lista->data;
		$linha_id = $lista->id;
		
		$link = "#";
		echo ("
<div id='topic2'><a href='$inicio/descri.php?id=$linha_id''>
<div class='placa'>$linha_placa</div>
<div class='nome'>$linha_nome</div>
<div class='KM'>$linha_km Km</div>
<div class='data-i'>$linha_data</div>
</a><form method='POST' action='$inicio/?p=dell_p'><input type='hidden' value='$linha_id' id='id_del' name='id_del'/><input type='submit' value='X'/></form></div>");
	} 
	
	}
	
	
	
	
	
	//"SELECT * FROM produtos WHERE nome LIKE '%".$palavra."%' ORDER BY nome"
?>