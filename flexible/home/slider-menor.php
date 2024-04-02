<?php
$po    = get_sub_field( 'posts' );
?>

<div class="marco-home">
	<section class="slider-horiz py-md-5 pb-4 my-5">
		<div class="container position-relative p-mobile-0">
			<div class="slider-control slider-control-horiz d-flex" aria-label="Carousel Navigation" tabindex="0">
				<a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

				<a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
			</div>

			<div class="int mx-md-5">
				<div class="horz-sl">
					<?php foreach ( $po as $item ) {
						$post   = $item['post'];
						$titulo = ! empty( $item['titulo_alternativo'] ) ? $item['titulo_alternativo'] : $post->post_title;
						$img    = $item['imagem_alternativa'];

						$categoria = get_the_category($post->ID);
						?>

						<div class="item mb-4">
							<div class="d-flex flex-column flex-md-row">
								<div class="texto d-flex flex-column ms-5 ms-md-3 me-5 me-md-0 mt-3 mt-md-0 order-2 order-md-1">
									<a href="<?php echo get_category_link($categoria[0]->term_id) ?>" class="cat text-uppercase"><?php echo $categoria[0]->name ?></a>

									<a href="<?php echo get_permalink($post->ID) ?>" class="titulo text-uppercase tituloGrande my-2"><?php echo $titulo ?></a>

									<?php mz_detalhes($post->ID, 'd-flex flex-column flex-md-row aling-items-center mt-2', 'mx-3 d-none d-md-inline-block'); ?>

									<?php mz_tags($post->ID, 'd-flex mt-5', 2); ?>

								</div>

								<div class="imagem ms-md-auto order-1 order-md-2">
									<a href="<?php echo get_permalink($post->ID) ?>">
										<?php if ( ! empty( $img ) ) { ?>
											<picture>
												<source media="(max-width: 799px)" srcset="<?php echo $img['sizes']['large'] ?>">
												<source media="(min-width: 800px)" srcset="<?php echo $img['url'] ?>">
												<img src="<?php echo $img['url'] ?>" alt="<?php echo !empty($img['alt']) ? str_replace('"', '', $img['alt']) : '' ?>" class="w-100" loading="lazy">
											</picture>
										<?php } else {
											mz_imgDestaque($post->ID, 'large', 'large', 'w-100');
										} ?>
									</a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
</div>