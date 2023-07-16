<?php 

?>
<a href="/?p=adicionar"><div class="add">+ Adicionar</div></a>

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
while ($lista = mysql_fetch_object ($dados_q)) {
	$linha_id = $lista->id;
	$linha_nome = $lista->nome;
	$linha_placa = $lista->placa;
	$linha_km = $lista->km;
	$linha_data = $lista->data;
//	$link = $inicio,"/descri.php?id=",$linha_id;
echo ("
<div id='topic2'><a href='$inicio/descri.php?id=$linha_id'>
<div class='placa'>$linha_placa</div>
<div class='nome'>$linha_nome</div>
<div class='KM'>$linha_km Km</div>
<div class='data-i'>$linha_data</div>
</a><form method='POST' action='$inicio/?p=dell_p'><input type='hidden' value='$linha_id' id='id_del' name='id_del'/><input type='submit' value='X'/></form></div>");

}
?>
