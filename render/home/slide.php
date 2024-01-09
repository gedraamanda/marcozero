<?php
$bloco = $args;

if ( ! empty( $bloco['posts'] ) ) { ?>
	<section class="slider pb-5">
		<div class="container position-relative p-mobile-0">
			<div class="slider-control slider-control-homeslide d-flex" aria-label="Carousel Navigation" tabindex="0">
				<a class="prev me-4" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

				<a class="next ms-auto ms-md-0" data-controls="next" aria-controls="customize" tabindex="-1"></a>
			</div>

			<div class="slider-sl">
				<?php foreach ( $bloco['posts'] as $item ) {
					$titulo    = ! empty( $item['titulo_alternativo'] ) ? $item['titulo_alternativo'] : $item['post']->post_title;
					$linhaFina = ! empty( $item['linhafina_alternativa'] ) ? $item['linhafina_alternativa'] : get_field( 'post_linhafina', $item['post']->ID );
					$img       = $item['imagem_alternativa'];
					?>

					<div class="item">
						<div class="d-flex flex-column flex-md-row position-relative">
							<div class="item__imagem">
								<?php if(!empty($img)) { ?>
									<picture>
										<source media="(max-width: 799px)" srcset="<?php echo $img['sizes']['large'] ?>">
										<source media="(min-width: 800px)" srcset="<?php echo $img['url'] ?>">
										<img src="<?php echo $img['url'] ?>" alt="<?php echo !empty($img['alt']) ? str_replace('"', '', $img['alt']) : '' ?>" class="" loading="lazy">
									</picture>
								<?php } else {
									mz_imgDestaque($item['post']->ID, 'large', 'large', '');
								} ?>
							</div>

							<div class="item__texto me-5 me-md-0 ms-5 mt-3 mt-md-5 pt-md-5">
								<div class="d-flex flex-column int mx-auto ms-4 ms-md-0">
									<a href="<?php echo get_permalink($item['post']->ID) ?>" class="titulo text-uppercase tituloGrande mb-3"><?php echo $titulo ?></a>

									<?php if ( ! empty( $linhaFina ) ) { ?>
										<a href="<?php echo get_permalink( $item['post']->ID ) ?>">
											<p class="linha-fina m-0 linhaFinaPd"><?php echo $linhaFina ?></p>
										</a>
									<?php } ?>

									<?php mz_detalhes($item['post']->ID, 'd-flex flex-column flex-md-row aling-items-center mt-2', 'mx-3 d-none d-md-inline-block'); ?>

									<?php mz_tags($item['post']->ID, 'd-none d-md-flex mt-5 pt-4 flex-wrap'); ?>
								</div>
							</div>
						</div>

					</div>
				<?php } ?>
			</div>

		</div>

	</section>
<?php } ?>


<div class="menu-footer menu-footer-home w-100">
	<div class="container">
		<div class="d-flex justify-content-center justify-content-md-between position-relative">
			<a href="https://marcozero.us18.list-manage.com/subscribe/post?u=6903930ec168971e947bb728b&id=c1b8b74962" target="_blank" class="apoie m-fade activehome">ASSINE NOSSA NEWSLETTER</a>

			<p class="m-0 m-fade"><a href="#" class="apoie apoie-click">APOIE</a> O JORNALISMO INDEPENDENTE</p>

			<div class="d-flex align-items-center m-fade">
				<p class="m-0 me-3">VISITE NOSSAS REDES SOCIAIS</p>

				<div class="social d-flex align-items-center">
					<a href="" class="facebook"></a>
					<a href="" class="instagram"></a>
					<a href="" class="twitter"></a>
					<a href="" class="youtube-m"></a>
				</div>
			</div>

		</div>
	</div>
</div>