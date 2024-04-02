<?php
$automatic = get_sub_field( 'automatico' );
$stories = get_sub_field( 'stories' );

if ( $automatic ) {
	$postsWeb = new WP_Query( array( 'post_type' => 'web-story', 'post_status' => 'publish', 'posts_per_page' => 8 ) );
	$postsWeb = $postsWeb->posts;
} else {
	$postsWeb = $stories;
}
?>

<div class="marco-home">
	<section class="stories container mt-md-5 position-relative my-5">
		<div class="d-flex mx-md-5 align-items-center">
			<h2 class="tituloSessao text-uppercase">webstories</h2>

			<a href="#" class="apoie reg ms-auto text-uppercase">ver mais</a>
		</div>

		<div class="mx-5 mt-3">
			<div class="stories__slide row row-cols-4 ">
				<?php  foreach ( $postsWeb as $item ) { ?>
					<a href="<?php echo get_permalink($item->ID) ?>" class="mb-4">
						<?php mz_imgDestaque($item->ID, 'large', 'large', ''); ?>
					</a>
				<?php } ?>
			</div>
		</div>

	</section>
</div>
