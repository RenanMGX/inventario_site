<html>
<head><meta http-equiv="content-type" content="text/html; charset=UTF-8" /><meta name="keywords" content="website keywords, website keywords" />
<?php 
	include ("ip.php");
	echo ("<style type='text/css'>");
	include ("style.css");
	echo ("</style>");
	include ("estrutura/menu.php");
	
	$id = $_GET["id"];
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
?>
<style type="text/css">
.text_form_r {
	height: 40px;
	width: 120px;
	text-align: right;
	padding: 0 5px 0 5px;
	background: white;
	border-style: solid;
	border-color: black;
	font-size: 100%;
}
.text_form_c {
	height: 40px;
	width: 70px;
	text-align: right;
	padding: 0 5px 0 5px;
	background: white;
	border-style: solid;
	border-color: black;
	font-size: 100%;
}
.text_form_descri {
	height: 150;
	width: 700px;
	padding: 0px 0px 0px 10px;
	margin: 0px 0px 0px 200px;
	display: block;
	background: white;
	border-style: solid;
	border-color: black;
	font-size: 158%;
}
.valor {
	border:none;
	width: 500px
}
</style>
<div id="add_form">
<span class="form_titulo">Formulario para adcionar novos dados!</span>
<div class="add_form">
<form method="POST" action="add.php" id="form_add">
<div class="valor">
<span class="text">Valor: <input type="text" id="reais" name="reais" class="text_form_r" value="0"/>
,
<input type="text" id="centavos" name="centavos" class="text_form_c" value="00"/>
</div>
</br>
<span class="text">Serviço:</span> <textarea class="text_form_descri" id="servi" name="servi"></textarea></br>
<input type="hidden" name="id" id="id" value="<?php echo $id ?>"/>
<input type="submit" value="Adicionar" class="form_enviar"/>
</form>
</div>
</div>