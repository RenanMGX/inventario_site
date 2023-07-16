<html>
<head><meta http-equiv="content-type" content="text/html; charset=UTF-8" /><meta name="keywords" content="website keywords, website keywords" /><title>Motopecas Venda Nova</title></head>
<body>
<?php
	//include//
	include ("ip.php");
	//logica//
	
error_reporting(0);

	$p = $_GET["p"] ;
	if (empty($p)) {
		$pagina = 'inicio';
	} else {
		$pagina = $p;
	}
	
	//conteudo_include//
	echo ("<style type='text/css'>");
	include ("style.css");
	echo ("</style>");
	echo ("<div id='body'");
	include ("estrutura/menu.php");
	
	//conteudo_centro//
	
		echo ("<div class='centro'>");
		if (file_exists('centro/'.$pagina.'.php')) {
			include ("centro/$pagina.php");
		} else {
			echo ("Esta Pagina Não Existe!");
		}
		echo ("</div>");
		
	//conteudo_include2//

	
	echo ("</div>");
?>
</body>
</html> 