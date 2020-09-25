<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
    <!--
    <div class="nome">
        <h1>Rei FastBurguer</h1>
        <div>
            <img src="img/icon-cego.png" alt="Ícone de acessibilidade para deficientes visuais">
            <img src="img/icon-surdo.png" alt="Ícone de acessibilidade para surdos">
        </div>
        <p> </p>
        <input class="botao" type="submit" value="Esconder menu" onclick="esconde('Menu');" tabindex="1" aria-label="Esconder ou mostrar o menu" id="esconde_menu">
    </div>
    -->
    <nav class="navbar navbar-dark navbar-expand-lg nome" style="background-color: #990b0b;">
        <div class="row col-md-9">
            <a class="navbar-brand " href="?page=home" tabindex="1">
                <h4 class="mx-3">Rei FastBurguer</h4>
            </a>

            <a class="navbar-brand" href="#">
                <input class="btn btn-dark" type="button" value="Esconder menu" onclick="esconde('Menu');" tabindex="2" aria-label="Esconder ou mostrar o menu" id="esconde_menu"> <!-- ARIA1 -->
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item menus">
                        <a class="nav-link" tabindex="3" href="?page=home">INÍCIO</a>
                    </li>
                    <li class="nav-item menus">
                        <a class="nav-link" tabindex="4" href="?page=lanches">LANCHES</a>
                    </li>
                    <li class="nav-item menus">
                        <a class="nav-link" tabindex="5" href="?page=bebidas">BEBIDAS</a>
                    </li>
                    <li class="nav-item menus">
                        <a class="nav-link" tabindex="6" href="?page=outros">OUTROS</a>
                    </li>
                </ul>
            </div> 
        </div>
        <a class="navbar-brand">
            <img src="img/icon-cego.png"  alt="Ícone de acessibilidade para deficientes visuais" width="30" height="30" class="d-inline-block align-top rounded" loading="lazy">
            <img src="img/icon-surdo.png" alt="Ícone de acessibilidade para surdos"              width="30" height="30" class="d-inline-block align-top rounded" loading="lazy">
        </a>
    </nav>