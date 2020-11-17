<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="utf-8">
    
    <?php 
        if (isset($_GET["boolContraste"])) {
            $boolContraste = $_GET["boolContraste"];
            echo("if");
            echo($_GET["boolContraste"]);
        }else{
            $boolContraste = "false"; 
            echo("else");
        }
    ?>

    <!-- CSS do site -->
    <link rel="stylesheet" type="text/css" href="<?=$boolContraste == "false" ? "estilo.css" : "contraste.css" ;?>" />
    
    <!-- Mapa do Google -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="js.js"></script>

    <title><?=$title?></title>

</head>
<body>

<div class="row menu">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: #990b0b;">
        <div class="col-md-4 col-sm">
            <a class="navbar-brand nome" href="?page=home" tabindex="1">
                <h4 class="mx-3">Rei FastBurguer</h4>
            </a>
            <input class="btn btn-dark" type="button" value="Esconder menu" onclick="esconde();" tabindex="2" aria-label="Esconder ou mostrar o menu" id="esconde_menu"> <!-- ARIA1 -->
        </div>
        
        <div class="col-md-6 col-sm">
            <ul class="nav">
                <li class="nav-item teste">
                    <a class="nav-link menus" tabindex="3" href="?page=home&boolContraste=<?= isset($_GET["boolContraste"]) ? $_GET["boolContraste"] : false ?>">INÍCIO</a>
                </li>
                <li class="nav-item teste">
                    <a class="nav-link menus" tabindex="4" href="?page=lanches&boolContraste=<?= isset($_GET["boolContraste"]) ? $_GET["boolContraste"] : false ?>">LANCHES</a>
                </li>
                <li class="nav-item teste">
                    <a class="nav-link menus" tabindex="5" href="?page=bebidas&boolContraste=<?= isset($_GET["boolContraste"]) ? $_GET["boolContraste"] : false ?>">BEBIDAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menus" tabindex="6" href="?page=outros&boolContraste=<?= isset($_GET["boolContraste"]) ? $_GET["boolContraste"] : false ?>">OUTROS</a>
                </li>
            </ul>
        </div>
        
        <div class="col-md-2 col-sm">
            <a class="nav">
                <img src="img/icon-cego.png"  alt="Ícone de acessibilidade para deficientes visuais" width="30" height="30" class="d-inline-block align-top rounded mx-1" loading="lazy">
                <img src="img/icon-surdo.png" alt="Ícone de acessibilidade para surdos"              width="30" height="30" class="d-inline-block align-top rounded mx-1" loading="lazy">
            </a>
        </div>
    </nav>
</div>
    