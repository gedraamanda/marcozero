<?php
$titulo = get_sub_field( 'titulo' );
$po     = get_sub_field( 'posts' );
$dest   = get_sub_field( 'destaque' );

?>

<div class="marco-home">
	<section class="midia" style="margin-top: 0 !important;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 pe-md-5 bg">
					<div class="midia__pod pe-md-5 py-4 py-md-5">
						<h2 class="tituloSessao text-uppercase"><?php echo $titulo ?></h2>

						<div class="row row-cols-2 mt-4">
							<?php foreach ( $po as $i => $item ) {
								$post   = $item['post'];
								$titulo = ! empty( $item['titulo_alternativo'] ) ? $item['titulo_alternativo'] : $post->post_title;
								$img    = $item['imagem_alternativa'];
								?>

								<div class="pod-post <?php echo $i == 0 ? 'pe-4' : 'ps-4' ?>">
									<a href="<?php echo get_permalink($post->ID) ?>">

										<?php if(!empty($img)) { ?>
											<picture>
												<source media="(max-width: 799px)" srcset="<?php echo $img['sizes']['large'] ?>">
												<source media="(min-width: 800px)" srcset="<?php echo $img['url'] ?>">
												<img src="<?php echo $img['url'] ?>" alt="<?php echo !empty($img['alt']) ? str_replace('"', '', $img['alt']) : '' ?>" class="w-100" loading="lazy">
											</picture>
										<?php } else {
											$capa = get_field('img_podcast', $post->ID);

											if ( ! empty( $capa ) ) { ?>
												<picture>
													<img src="<?php echo $capa['url'] ?>" alt="<?php echo !empty($capa['alt']) ? str_replace('"', '', $capa['alt']) : '' ?>" class="w-100" loading="lazy">
												</picture>
											<?php } else {
												mz_imgDestaque($post->ID, 'large', 'large', 'w-100');
											}
										} ?>
									</a>

									<p class="titulo mt-3 mb-0">
										<i></i>

										<a href="<?php echo get_permalink($post->ID) ?>"><?php echo $titulo ?></a>
									</p>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 mt-4 mt-md-0">
					<div class="midia__destaque ms-md-3">
						<a href="<?php echo get_permalink($dest['post']->ID) ?>">
							<?php mz_imgDestaque($dest['post']->ID, 'large', 'large', 'w-100'); ?>
						</a>

						<a href="<?php echo get_permalink($dest['post']->ID) ?>" class="titulo text-uppercase mt-2"><?php echo !empty($dest['titulo_alternativo']) ? $dest['titulo_alternativo'] : $dest['post']->post_title ?></a>

						<?php mz_detalhes($dest['post']->ID, 'd-flex flex-column flex-md-row aling-items-center mt-2', 'mx-3 d-none d-md-inline-block'); ?>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>