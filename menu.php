<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="utf-8">
    
    <?php 
        if (isset($_GET["boolContraste"])) {
            $boolContraste = $_GET["boolContraste"];
        }else{
            $boolContraste = "false"; 
        }
    ?>

    <!--favicon do site-->
    <link rel="shortcut icon" href="img/reifavicon.jpg">
    <!-- CSS do site -->
    <link rel="stylesheet" type="text/css" href="<?=$boolContraste == "false" ? "estilo.css" : "contraste.css" ;?>" />
    
    <!-- Mapa do Google -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script src="js.js"></script>

    <title><?=$title?></title>

</head>
<body>

<div class="row menu">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: #990b0b;">
        <a class="navbar-brand nome" href="?page=home&boolContraste=<?= isset($_GET["boolContraste"]) ? $_GET["boolContraste"] : false ?>"" tabindex="1">
            <h4 class="mx-2">Rei FastBurguer</h4>
        </a>
        <input id="esconde_menu" class="btn btn-dark m-2" type="button" value="Esconder menu" onclick="esconde();" tabindex="2" aria-label="Esconder ou mostrar o menu"> <!-- ARIA1 -->
        
        <button class="navbar-toggler justify-content-end" data-target="#navbarTogglerDemo02" data-toggle="collapse" type="button" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>    
        
        <div id="navbarTogglerDemo02" class="collapse navbar-collapse">
            <ul class="navbar-nav m-2">
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
        
        <!-- <div class="col-md-2 col-sm">
            <a class="nav">
                <img src="img/icon-cego.png"  alt="Ícone de acessibilidade para deficientes visuais" width="30" height="30" class="d-inline-block align-top rounded mx-1" loading="lazy">
                <img src="img/icon-surdo.png" alt="Ícone de acessibilidade para surdos"              width="30" height="30" class="d-inline-block align-top rounded mx-1" loading="lazy">
            </a>
        </div> -->
    </nav>
</div>
    