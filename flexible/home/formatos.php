<?php
$formato    = get_sub_field( 'formato' );
$automatico = get_sub_field( 'automatico' );
$des   = get_sub_field( 'destaque' );
$po      = get_sub_field( 'posts' );

if ( $automatico ) {
	$postsForm = new WP_Query( array(
		'post_status'    => 'publish',
		'posts_per_page' => 4,
		'tax_query'      => array(
			array(
				'taxonomy' => 'formatos',
				'field'    => 'slug',
				'terms'    => $formato->slug,
			)
		)
	) );

	$postsForm = $postsForm->posts;
} else {
	$destaque = $des;
	$posts    = $po;
}
?>

<div class="marco-home">
	<section class="reportagens">
		<div class="container pt-4 pt-md-5">
			<div class="d-flex mx-md-5 align-items-center">
				<h2 class="tituloSessao text-uppercase"><?php echo $formato->name ?></h2>

				<a href="<?php echo get_term_link($formato->term_id, 'formatos') ?>" class="apoie reg ms-auto text-uppercase">ver mais</a>
			</div>

			<?php if ( $automatico ) {  ?>
				<div class="row mt-4">
					<div class="col-12 col-md-9 bg pb-4 pb-md-0">
						<div class="destaque position-relative">
							<div class="d-flex flex-column flex-md-row">
								<div class="destaque__texto pt-3 pe-4 order-2 order-md-1">
									<div class="d-flex flex-column">
										<a href="<?php echo get_permalink($postsForm[0]->ID) ?>" class="titulo text-uppercase mb-2"><?php echo $postsForm[0]->post_title ?></a>

										<?php if ( ! empty( get_field( 'post_linhafina', $postsForm[0]->ID ) ) ) { ?>
											<a href="<?php echo get_permalink($postsForm[0]->ID) ?>">
												<p class="m-0 linhaFinaPd"><?php echo get_field( 'post_linhafina', $postsForm[0]->ID ) ?></p>
											</a>
										<?php } ?>

										<?php mz_detalhes($postsForm[0]->ID, 'd-flex flex-column flex-md-row aling-items-center mt-2 flex-wrap', 'mx-3 d-none d-md-inline-block'); ?>

										<?php mz_tags($postsForm[0]->ID, 'd-flex mt-5 flex-wrap', 2); ?>
									</div>
								</div>

								<div class="destaque__imagem ms-auto order-1 order-md-2">
									<a href="<?php echo get_permalink($postsForm[0]->ID) ?>">
										<?php mz_imgDestaque($postsForm[0]->ID, 'large', 'large', 'w-100'); ?>
									</a>
								</div>
							</div>

						</div>
					</div>

					<?php unset($postsForm[0]);  ?>

					<div class="col-12 col-md-3">
						<div class="d-flex flex-column ms-md-4 me-5">
							<?php foreach ( $postsForm as $i => $item ) { ?>
								<div class="post <?php echo $i == 0 ? 'mt-5 mt-md-0' : '' ?>">
									<a href="<?php echo get_permalink($item->ID) ?>" class="titulo"><?php echo $item->post_title ?></a>

									<?php mz_detalhes($item->ID, 'd-flex flex-column mt-2', 'd-none'); ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } else { ?>
				<div class="row mt-4">
					<div class="col-12 col-md-9 bg pb-4 pb-md-0">

						<div class="destaque position-relative">
							<div class="d-flex flex-column flex-md-row">
								<div class="destaque__texto pt-3 pe-4 order-2 order-md-1">
									<div class="d-flex flex-column">
										<a href="<?php echo get_permalink($destaque['post']->ID) ?>" class="titulo text-uppercase mb-2"><?php echo !empty($destaque['titulo_alternativo']) ? $destaque['titulo_alternativo'] : $destaque['post']->post_title ?></a>

										<?php
										$linhaFina = ! empty( $destaque['linhafina_alternativa'] ) ? $destaque['linhafina_alternativa'] : get_field( 'post_linhafina', $destaque['post']->ID );

										if ( ! empty( $linhaFina ) ) { ?>
											<a href="<?php echo get_permalink( $destaque['post']->ID ) ?>">
												<p class="m-0 linhaFinaPd"><?php echo $linhaFina ?></p>
											</a>
										<?php } ?>


										<?php mz_detalhes($destaque['post']->ID, 'd-flex flex-column flex-md-row aling-items-center mt-2 flex-wrap', 'mx-3 d-none d-md-inline-block'); ?>

										<?php mz_tags($destaque['post']->ID, 'd-flex mt-5 flex-wrap', 2); ?>

									</div>
								</div>

								<?php
								$img = !empty($destaque['imagem_alternativa']) ? $destaque['imagem_alternativa'] : '';
								$full = isset($destaque['full_img']) ? $destaque['full_img'] : true;
								?>
								<div class="destaque__imagem ms-auto order-1 order-md-2 <?php echo $full === true ? 'full' : 'not-full' ?>">
									<a href="<?php echo get_permalink( $destaque['post']->ID ) ?>">
										<?php

										if(!empty($img)) { ?>
											<picture>
												<source media="(max-width: 799px)" srcset="<?php echo $img['sizes']['large'] ?>">
												<source media="(min-width: 800px)" srcset="<?php echo $img['url'] ?>">
												<img src="<?php echo $img['url'] ?>" alt="<?php echo !empty($img['alt']) ? str_replace('"', '', $img['alt']) : '' ?>" class="w-100" loading="lazy">
											</picture>
										<?php } else {
											mz_imgDestaque($destaque['post']->ID, 'large', 'large', 'w-100');
										} ?>
									</a>
								</div>
							</div>

						</div>
					</div>

					<div class="col-12 col-md-3">
						<div class="d-flex flex-column ms-md-4 me-5">
							<?php foreach ( $posts as $i => $item ) {
								$titulo    = ! empty( $item['titulo_alternativo'] ) ? $item['titulo_alternativo'] : $item['post']->post_title; ?>

								<div class="post <?php echo $i === 0 ? 'mt-5 mt-md-0' : '' ?>">
									<a href="<?php echo get_permalink($item['post']->ID) ?>" class="titulo"><?php echo $titulo ?></a>

									<?php mz_detalhes($item['post']->ID, 'd-flex flex-column mt-2', 'd-none'); ?>

								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</section>
</div>
