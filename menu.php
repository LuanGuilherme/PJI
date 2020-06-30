<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js.js"></script>
</head>
<body>
<div class="nome">
    <h1>Rei FastBurguer</h1>
    <div>
        <img src="img/icon-cego.png" alt="Ícone de acessibilidade para deficientes visuais">
        <img src="img/icon-surdo.png" alt="Ícone de acessibilidade para surdos">
    </div>
    <p> </p>
    <input class="botao" type="submit" value="Esconder menu" onclick="esconde('Menu');" tabindex="1" aria-label="Esconder ou mostrar o menu" id="esconde_menu"> <!-- ARIA1 -->
</div>
<nav class="menu" id="menu" role="listbox" aria-label="Menu">    
    
    <ul class="ul">
        <a href="?page=home" tabindex="2"><li>PÁGINA INICIAL</li></a>
        <a href="?page=lanches" tabindex="3"><li>LANCHES</li></a>
        <a href="?page=bebidas" tabindex="4"><li>BEBIDAS</li></a>
        <a href="?page=outros" tabindex="5"><li>OUTROS</li></a>
    </ul>
    
</nav>    
