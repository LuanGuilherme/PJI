<?php 
    $produtosBt = selecionarBatata();
    $produtosCr = selecionarCrepe();
    $produtosSb = selecionarSobremesa();
    
?>

<section class="produtos" role="list" aria-label="Cardápio de porções">
    <h1 class="titulo" tabindex="8">Porções</h1>
    
    <ul>
        <div class="mosaico">
            <?php for ($i = 0; $i < count($produtosBt); $i++) : ?>
                <div  tabindex="<?= $i + 9?>" class="sub-mosaico">
                    <li><?= $produtosBt[$i]["DescricaoBatata"] ?></li>
                    <li><script> converteReal(<?= $produtosBt[$i]["PrecoBatata"]?>)</script></li>
                </div>
            <?php endfor; ?>
        </div>
    </ul>
    
</section>

<section class="produtos" role="list" aria-label="Cardápio de crepes">
    <h1 class="titulo" tabindex="16">Crepes</h1>
    
    <ul>
        <div class="mosaico">
            <?php for ($i = 0; $i < count($produtosCr); $i++) : ?>
                <div  tabindex="<?= $i + 17?>" class="sub-mosaico">
                    <li><?= $produtosCr[$i]["NomeCrepe"] ?></li>
                    <li><script> converteReal(<?= $produtosCr[$i]["PrecoCrepe"]?>)</script></li>
                </div>
            <?php endfor; ?>
        </div>
    </ul>
    
</section>

<section class="produtos" role="list" aria-label="Cardápio de sobremesas">
    <h1 class="titulo" tabindex="21">Sobremesas</h1>
    
    <ul>
        <div class="mosaico">
            <?php for ($i = 0; $i < count($produtosSb); $i++) : ?>
                <div  tabindex="<?= $i + 22?>" class="sub-mosaico">
                    <li><?= $produtosSb[$i]["NomeSobremesa"] ?></li>
                    <li><script> converteReal(<?= $produtosSb[$i]["PrecoSobremesa"]?>)</script></li>
                </div>
            <?php endfor; ?>
        </div>
    </ul>
    
</section>