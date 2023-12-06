<?php
$tipo = get_field('caixa_tipo');
$titulo = get_field('caixa_titulo');
$texto = get_field('caixa_texto');


if ( $tipo === 'complementar' ) { ?>
	<div class="informacao mx-md-5 px-5 py-4 my-5" style="--cat-color: #7BDDDD;">
		<span class="titulo text-uppercase mb-3 d-block"><?php echo $titulo ?></span>

		<?php echo $texto ?>
	</div>
<?php }

if ( $tipo === 'lista' ) {
	$lista = get_field('caixa_lista'); ?>

    <div class="lista mx-md-5 px-5 py-4 my-5" style="--cat-color: #EBEB01;">
        <span class="titulo text-uppercase mb-3 d-block"><?php echo $titulo ?></span>

        <?php foreach ( $lista as $i => $item ) { ?>
            <div class="lista__item">
                <p class="m-0"><span><?php echo $i + 1 ?>. </span><?php echo $item['texto'] ?></p>
            </div>
        <?php } ?>
    </div>
<?php }

if ( $tipo === 'nota' ) { ?>
    <div class="infos mx-md-5 px-5 py-4 my-5">
        <span class="titulo text-uppercase mb-2 d-block"><?php echo $titulo ?></span>

	    <?php echo $texto ?>
    </div>
<?php }

if ( $tipo === 'explicacao' ) { ?>
    <div class="box-explicacao mx-md-5 px-4 py-3 my-3" style="--cat-color: #1E69FA;">
        <span class="titulo"><+></span>

        <div class="int mx-auto">
	        <?php echo $texto ?>
        </div>
    </div>
<?php }