<?php
$postId = get_the_ID();

$categoria = get_the_category( $postId );
$corCat    = mz_catCores( $categoria[0]->slug );
$linhaFina = get_field('post_linhafina', $postId);

$imgData = get_post( get_post_thumbnail_id( $postId ) );
$legenda = wp_get_attachment_caption( $imgData->ID );
$credito = get_field( 'img_credito', $imgData->ID );
?>

<header style="--cat-color: <?php echo $corCat ?>;" class=" pb-4 pb-md-5 py-md-5 header-foto">
	<div class="container h-100 position-relative">
		<div class="row h-100 ">
			<div class="col-12 col-md-10 h-100 offset-md-1">
				<div class="imagem mx-md-5">
					<?php mz_imgDestaque($postId, '', '', 'w-100'); ?>
				</div>
			</div>

			<?php if ( ! empty( $legenda ) || ! empty( $credito ) ) { ?>
                    <div class="col-12 col-md-1 align-self-end">
                        <figcaption class="legenda-credito mt-2 px-3 px-md-0 text-start">
                            <p class="m-0 mb-1"><?php echo $legenda ?></p>

		                    <?php if ( ! empty( $credito ) ) { ?>
                                <span><?php echo $credito ?></span>
		                    <?php }?>

                        </figcaption>
                    </div>

			<?php } ?>
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