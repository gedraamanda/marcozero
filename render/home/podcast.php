<?php
$bloco = $args;

$posts    = $bloco['posts'];
$destaque = $bloco['destaque'];
?>

<section class="midia mt-5 mt-md-0">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 pe-md-5 bg">
				<div class="midia__pod pe-md-5 py-4 py-md-5">
					<h2 class="tituloSessao text-uppercase"><?php echo $bloco['titulo'] ?></h2>

					<div class="row row-cols-2 mt-4">
						<?php foreach ( $posts as $i => $item ) {
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
										mz_imgDestaque($post->ID, 'large', 'large', 'w-100');
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
					<a href="<?php echo get_permalink($destaque['post']->ID) ?>">
                        <?php mz_imgDestaque($destaque['post']->ID, 'large', 'large', 'w-100'); ?>
					</a>

					<a href="<?php echo get_permalink($destaque['post']->ID) ?>" class="titulo text-uppercase mt-2"><?php echo !empty($destaque['titulo_alternativo']) ? $destaque['titulo_alternativo'] : $destaque['post']->post_title ?></a>

					<?php mz_detalhes($destaque['post']->ID, 'd-flex flex-column flex-md-row aling-items-center mt-2', 'mx-3 d-none d-md-inline-block'); ?>

				</div>
			</div>
		</div>
	</div>
</section>