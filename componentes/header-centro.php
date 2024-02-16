<?php
$postId = get_the_ID();

$categoria = get_the_category( $postId );
$corCat    = mz_catCores( $categoria[0]->slug );
$linhaFina = get_field('post_linhafina', $postId);
?>

<header style="--cat-color: <?php echo $corCat ?>;" class=" pb-4 pb-md-5 py-md-5 header-foto">
	<div class="container h-100 position-relative">
		<div class="row h-100 ">
			<div class="col-12 col-md-10 mx-auto h-100">
				<div class="imagem mx-md-5">
					<?php mz_imgDestaque($postId, '', '', 'w-100'); ?>
				</div>
			</div>
		</div>

		<div class="texto ms-md-5">
			<h1 class="m-0 text-uppercase mb-3"><?php the_title(); ?></h1>

			<?php if ( ! empty( $linhaFina ) ) { ?>
                <p class="m-0 linha-fina linhaFinaPd"><?php echo $linhaFina ?></p>
			<?php } ?>

			<?php mz_detalhes($postId, 'd-flex flex-column flex-md-row aling-items-center mt-2', 'mx-3 d-none d-md-inline-block'); ?>

			<?php mz_tags($postId, 'd-flex mt-4 flex-wrap', 3); ?>

		</div>
	</div>
</header>