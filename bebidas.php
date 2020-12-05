<?php 
$produtos_bebidas = selecionarBebidas(); 

$count = 9;
?> 

<section class="produtos mt-5" role="list" aria-label="Cardápio de bebidas">
    <h1 class="titulo" tabindex="8">Bebidas</h1>

    <?php require 'In_Contraste.php'; ?>

    <ul>
        <div class="mosaico">
            <?php foreach ($produtos_bebidas as $item) : ?>
                <div tabindex="<?= $count += 1 ?>" class = "sub-mosaico">
                    <li><?=$item['NomeBebida']?></li>
                    <li><script> converteReal(<?=$item['PrecoBebida']?>)</script></li>
                </div>
            <?php endforeach; ?>
        </div>
    </ul>
</section>