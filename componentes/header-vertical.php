<?php
$postId = get_the_ID();

$categoria = get_the_category( $postId );
$corCat    = mz_catCores( $categoria[0]->slug );
$linhaFina = get_field('post_linhafina', $postId);
?>

<header style="--cat-color: <?php echo $corCat ?>;" class="py-4 py-md-5">
	<div class="container">
		<div class="row row-cols-md-2">
			<div class="texto px-md-5 align-self-end order-2 order-md-1">
				<h1 class="tituloGrande m-0 text-uppercase mb-3 ajuste"><?php the_title() ?></h1>

				<?php if ( ! empty( $linhaFina ) ) { ?>
                    <p class="m-0 linha-fina linhaFinaPd"><?php echo $linhaFina ?></p>
                <?php } ?>

				<?php mz_detalhes($postId, 'd-flex flex-column flex-md-row aling-items-center mt-3 mt-md-2', 'mx-3 d-none d-md-inline-block'); ?>

				<?php mz_tags($postId, 'd-flex mt-4 mt-md-5 flex-wrap'); ?>
			</div>

			<div class="imagem ps-md-5 text-center order-1 order-md-2">
				<?php mz_imgDestaque($postId); ?>
			</div>
		</div>
	</div>
</header>