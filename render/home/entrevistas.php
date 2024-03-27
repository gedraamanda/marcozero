<?php
$bloco = $args;

$formato = $bloco['formato'];

?>

<section class="entrevista py-4 py-md-5 mt-5 mt-md-0 my-5">
	<div class="container">
		<div class="position-relative mx-md-5">
			<div class="d-flex align-items-center">
				<h2 class="tituloSessao text-uppercase">entrevistas</h2>

				<a href="/formato/entrevista/" class="apoie reg ms-auto text-uppercase">ver mais</a>
			</div>

			<div class="slider-control slider-control-entrevista d-flex d-md-none" aria-label="Carousel Navigation" tabindex="0">
				<a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

				<a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
			</div>

			<div class="int mx-auto mt-4">
				<div class="entrevista__posts <?php echo !wp_is_mobile() ? 'd-flex justify-content-between' : '' ?>">
					<?php foreach ( $bloco['posts'] as $item ) {
						$postId       = $item['post'];
						$entrevistado = ! empty( $item['entrevistado'] ) ? $item['entrevistado'] : get_field( 'post_entrevistado', $postId );
						$titulo       = ! empty( $item['titulo_alternativo'] ) ? $item['titulo_alternativo'] : get_the_title( $postId );
						$img          = !empty($bloco['imagem_alternativa']) ? $bloco['imagem_alternativa'] : '';
						?>
						<div class="item  <?php echo !wp_is_mobile() ? 'd-flex flex-column' : '' ?>">
							<a href="<?php echo get_permalink($postId) ?>">
								<?php if(!empty($img)) { ?>
                                    <picture>
                                        <source media="(max-width: 799px)" srcset="<?php echo $img['sizes']['large'] ?>">
                                        <source media="(min-width: 800px)" srcset="<?php echo $img['url'] ?>">
                                        <img src="<?php echo $img['url'] ?>" alt="<?php echo !empty($img['alt']) ? str_replace('"', '', $img['alt']) : '' ?>" class="w-100" loading="lazy">
                                    </picture>
								<?php } else {
									mz_imgDestaque($postId, 'large', 'large', 'w-100');
								} ?>
							</a>

							<div class="texto text-center d-flex flex-column mt-3">
								<div>
									<a href="<?php echo get_permalink($postId) ?>" class="ent"><?php echo $entrevistado ?></a>
								</div>

								<a href="<?php echo get_permalink($postId) ?>" class="titulo mt-3 mx-2"><?php echo $titulo ?></a>
							</div>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>

</section>
