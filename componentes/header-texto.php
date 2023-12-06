<?php
$postId = get_the_ID();

$categoria = get_the_category( $postId );
$corCat    = mz_catCores( $categoria[0]->slug );
$linhaFina = get_field('post_linhafina', $postId);
?>

<header style="--cat-color: <?php echo $corCat ?>;" class="header-texto">
	<div class="container">
		<div class="row">
			<div class="col-9 col-md-5 mx-auto">
				<div class="texto text-center">
					<h1 class="tituloGrande m-0 text-uppercase mb-3 mx-auto"><?php the_title(); ?></h1>

					<?php if ( ! empty( $linhaFina ) ) { ?>
                        <p class="m-0 linha-fina linhaFinaPd mx-auto"><?php echo $linhaFina ?></p>
					<?php } ?>

					<?php mz_detalhes($postId, 'd-flex flex-column flex-md-row aling-items-center mt-2 justify-content-center', 'mx-3 d-none d-md-inline-block'); ?>

					<?php mz_tags($postId, 'd-flex mt-5 justify-content-center flex-wrap'); ?>

				</div>
			</div>

		</div>
	</div>
</header>