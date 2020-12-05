<?php 

header('Content-language: pt-br');

$page = 'home';

if (isset($_GET["page"]) && $_GET["page"] != "home") {
	$page = $_GET["page"];
		require 'PHP/controle.php';
		header("Content-type: text/html; charset=utf-8"); 
		mysqli_query(cnx(), "SET character_set_results = 'utf8'");
}

switch ($page) {
	case 'bebidas':
		$title = "Bebidas";
		break;
	case 'lanches':
		$title = "Lanches";
		break;
	case 'outros':
		$title = "Outros";
		break;
	default:
		$title = "Página Inicial";
		break;
}

require 'menu.php';
// require 'In_Contraste.php';

switch ($page) {
	case 'bebidas':
		require $page.'.php';
		break;
	case 'lanches':
		require $page.'.php';
		break;
	case 'outros':
		require $page.'.php';
		break;
	default:
		require $page.'.php';
		break;
}

require 'rodape.php';

?>