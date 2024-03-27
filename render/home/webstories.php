<?php
$bloco = $args;

if ( $bloco['automatico'] ) {
	$postsWeb = new WP_Query( array( 'post_type' => 'web-story', 'post_status' => 'publish', 'posts_per_page' => 8 ) );
	$postsWeb = $postsWeb->posts;
} else {
	$postsWeb = $bloco['stories'];
}
?>

<section class="stories container mt-md-5 position-relative my-5">
	<div class="d-flex mx-md-5 align-items-center">
		<h2 class="tituloSessao text-uppercase">webstories</h2>

		<a href="#" class="apoie reg ms-auto text-uppercase">ver mais</a>
	</div>

	<div class="slider-control slider-control-stories d-flex" aria-label="Carousel Navigation" tabindex="0">
		<a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

		<a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
	</div>

	<div class="mx-5 mt-3">
		<div class="stories__slide">
			<?php  foreach ( $postsWeb as $item ) { ?>
				<a href="<?php echo get_permalink($item->ID) ?>">
					<?php mz_imgDestaque($item->ID, 'large', 'large', ''); ?>
				</a>
			<?php } ?>
		</div>
	</div>

</section>
