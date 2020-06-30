<?php $produtos_bebidas = selecionarBebidas(); ?>

<section class="produtos" role="list" aria-label="Cardápio de bebidas">
    <h1 class="titulo" tabindex="8">Bebidas</h1>
    <ul>
        <div class="mosaico">
            <?php for ($i = 0; $i < count($produtos_bebidas); $i++) : ?>
                <div tabindex="<?= $i + 9?>" class = "sub-mosaico">
                <li><?=$produtos_bebidas[$i]['NomeBebida']?></li>
                <li><script> converteReal(<?=$produtos_bebidas[$i]['PrecoBebida']?>)</script></li>
                </div>
            <?php endfor; ?>
        </div>
    </ul>
</section>