<?php
$titulo    = get_sub_field( 'titulo' );
$po    = get_sub_field( 'posts' );
?>

<div class="marco-home">
	<section class="videos py-4">
		<div class="container position-relative">
			<div class="d-flex mx-md-5 align-items-center">
				<h2 class="tituloSessao text-uppercase"><?php echo $titulo ?></h2>

				<a href="#" class="apoie reg ms-auto text-uppercase">ver mais</a>
			</div>

			<div class="position-relative mx-md-5 mt-4">
				<div class="video-sl row row-cols-2">
					<?php foreach ( $po as $item ) {
						$videoDestaque = get_field( 'post_videodestaque', $item['post']->ID );
						$video         = ! empty( $item['video_alternativo'] ) ? $item['video_alternativo'] : $videoDestaque;
						$videoId       = mz_youtubeId( $item['video_alternativo'] ); ?>

						<div class="item mb-4">
							<div class="wrapper">
								<div class="youtube" data-embed="<?php echo $videoId ?>">
									<div class="play-button"></div>
								</div>
							</div>

							<a href="<?php echo get_permalink($item['post']->ID) ?>" class="m-0"><?php echo $item['post']->post_title; ?></a>
						</div>
					<?php } ?>

				</div>
			</div>

		</div>
	</section>
</div>
