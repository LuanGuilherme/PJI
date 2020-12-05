<?php  
    $produtos = selecionarLanche();
    $produtosAd = selecionarAdicional();
?>
<!--
IMPLEMENTAR A NORMA C22 DA WCAG!!! (alto contraste e aumento de fonte)
-->
<section class="produtos mt-5" role="list" aria-label="Cardápio de lanches">
    <h1 class="titulo" tabindex="8">Lanches</h1>
    
    <?php require 'In_Contraste.php'; ?>

    <ul>
        <div class="mosaico col">
            <?php for ($i = 0; $i < 28; $i++) : ?>
            <div tabindex="<?= $i + 9?>" class="sub-mosaico">
                <li class="nome-produto"> <?= $produtos[$i]["NomeLanche"]?> </li>
                <li> <?= $produtos[$i]["DescricaoLanche"] ?> </li> 
                <li class="preco"> <script> converteReal(<?= $produtos[$i]["PrecoLanche"]?>) </script></li>
            </div>
            <?php endfor; ?>
        </div>
    </ul>
    
</section>

<section class="produtos" role="list" aria-label="Adicionais do lanche">
    <h1 class="titulo" tabindex="37">Adicionais</h1>
    
    <ul>
        <div class="mosaico">
            <?php for ($i = 0; $i < count($produtosAd); $i++) : ?>
            <div tabindex="<?= $i + 38 ?>" class="sub-mosaico">
                <li><?= $produtosAd[$i]["DescricaoAdicional"]?> </li>
                <li> <script> converteReal(<?= $produtosAd[$i]["PrecoAdicional"] ?>)</script></li>
            </div>
            <?php endfor; ?>
        </div>
    </ul>
    
</section>
